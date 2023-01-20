<?php

require __DIR__ . '/../vendor/autoload.php';

$ACCOUNT_USER_MAIL = 'username';
$ACCOUNT_USER_PASSWORD = 'password';

if (!isset($_POST['firstname']) || !isset($_POST['lastname']) || !isset($_POST['email']) || !isset($_POST['phone'])) {
    throw new \Exception('Form is invalid');
}

$signatureField = new \Globalis\Universign\Request\DocSignatureField();
$signatureField
    ->setPage(1)
    ->setX(10)
    ->setY(230)
    ->setSignerIndex(0);

$document = new \Globalis\Universign\Request\TransactionDocument();
$document
    ->setPath(__DIR__ .'/../contract/contract.pdf')
    ->addSignatureField($signatureField);

$signer = new \Globalis\Universign\Request\TransactionSigner();
$signer
    ->setFirstname($_POST['firstname'])
    ->setLastname($_POST['lastname'])
    ->setEmailAddress($_POST['email'])
    ->setPhoneNum($_POST['phone'])
    ->setSuccessURL('https://www.universign.com')
    ->setCancelURL('https://www.universign.com')
    ->setFailURL('https://www.universign.com');

$request = new \Globalis\Universign\Request\TransactionRequest();
$request
    ->addSigner($signer)
    ->addDocument($document)
    ->setHandwrittenSignatureMode(
        \Globalis\Universign\Request\TransactionRequest::HANDWRITTEN_SIGNATURE_MODE_DIGITAL
    )
    ->setMustContactFirstSigner(false)
    ->setFinalDocRequesterSent(true)
    ->setChainingMode(
        \Globalis\Universign\Request\TransactionRequest::CHAINING_MODE_WEB
    )
    ->setDescription("Demonstration de la signature Universign")
    ->setProfile("default")
    ->setLanguage('fr');


try {
    $client = new \PhpXmlRpc\Client('https://sign.test.cryptolog.com/sign/rpc/');
    $client->setCredentials(
        $ACCOUNT_USER_MAIL,
        $ACCOUNT_USER_PASSWORD
    );

    $requester = new \Globalis\Universign\Requester($client);
    $response = $requester->requestTransaction($request);
} catch (UnexpectedValueException $exception) {
    throw new \Exception('Transaction failed');
}

$signatureUrl = $response->url;

header(sprintf('Location: %s', $signatureUrl));

?>
