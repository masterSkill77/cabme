<?php

namespace App\Services;

use Exception;
use SoapClient;

class CgrateService
{
    protected static $CGRATE_USERNAME;
    protected static $CGRATE_PASSWORD;
    protected static $CGRATE_URL;

    public function __construct()
    {
        CgrateService::$CGRATE_USERNAME = env('CGRATE_USERNAME', '1664275298259');
        CgrateService::$CGRATE_PASSWORD = env('CGRATE_PASSWORD', '5hz2FBTa');
        CgrateService::$CGRATE_URL = env('CGRATE_URL', 'http://test.543.cgrate.co.zm/Konik/KonikWs');
    }

    protected function makeRequest($soapBody)
    {
        $options = array(
            'stream_context' => stream_context_create(array(
                'ssl' => array(
                    'verify_peer' => false,
                    'verify_peer_name' => false
                )
            )),
            'soap_version' => SOAP_1_2,
            'trace' => 1,
            'exceptions' => true,
            'cache_wsdl' => WSDL_CACHE_NONE
        );

        // Création du client SOAP

        // En-tête de la requête SOAP
        $soapHeader = "<wsse:Security soapenv:mustUnderstand='1' xmlns:wsse='http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd'>
        <wsse:UsernameToken wsu:Id='" . CgrateService::$CGRATE_USERNAME . "' xmlns:wsu='http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-utility-1.0.xsd'>
        <wsse:Username>" . CgrateService::$CGRATE_USERNAME . "</wsse:Username>
        <wsse:Password Type='http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText'>" . CgrateService::$CGRATE_PASSWORD . "</wsse:Password>
        </wsse:UsernameToken>
        </wsse:Security>";
        $client = new SoapClient(CgrateService::$CGRATE_URL . '?wsdl', $options);
        $soapRequest = "<soapenv:Envelope xmlns:soapenv=\"http://schemas.xmlsoap.org/soap/envelope/\" xmlns:kon=\"http://konik.cgrate.com\">
                <soapenv:Header>{$soapHeader}</soapenv:Header>  
                <soapenv:Body>{$soapBody}</soapenv:Body>
                </soapenv:Envelope>";

        // Appel de la méthode SOAP
        $response = $client->__doRequest($soapRequest, CgrateService::$CGRATE_URL, 'http://schemas.xmlsoap.org/soap/envelope/', SOAP_1_2);

        return $response;
    }

    public function getAccountBalance()
    {
        $soapBody = '<getAccountBalance xmlns="http://konik.cgrate.com"/>';
        try {
            $response = $this->makeRequest($soapBody);
            $xml = simplexml_load_string($response);

            // $ns = $xml->getNamespaces(true)['ns2'];

            $result = array(
                'responseCode' => (string)$xml->xpath("//responseCode")[0],
                'responseMessage' => (string)$xml->xpath("//responseMessage")[0],
                'balance' => (float)$xml->xpath("//balance")[0],
            );

            return $result;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function processPayment($amount, $phone_number)
    {
        // Reference
        $timestamp = date('YmdGis', time());
        $reference_number = "OZ" . $timestamp;
        $soapBody = "<kon:processCustomerPayment>
            <transactionAmount>{$amount}</transactionAmount>
            <customerMobile>{$phone_number}</customerMobile>
            <paymentReference>{$reference_number}</paymentReference>
            </kon:processCustomerPayment>";

        try {
            $response = $this->makeRequest($soapBody);
            $xml = simplexml_load_string($response);

            // $ns = $xml->getNamespaces(true)['ns2'];

            // $result = array(
            //     'responseCode' => (string)$xml->xpath("//responseCode")[0],
            //     'responseMessage' => (string)$xml->xpath("//responseMessage")[0],
            //     'balance' => (float)$xml->xpath("//balance")[0],
            // );

            return $xml;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
    public function processCashout($phone_number, $cashoutCode, $cashierId)
    {
        $soapBody = "<kon:processCashOut>
        <cashOutCode>{$cashoutCode}</cashOutCode>
        <customerMobile>{$phone_number}</customerMobile>
        <cashierID>{$cashierId}</cashierID>
     </kon:processCashOut>";

        try {
            $response = $this->makeRequest($soapBody);
            $xml = simplexml_load_string($response);

            // $ns = $xml->getNamespaces(true)['ns2'];

            // $result = array(
            //     'responseCode' => (string)$xml->xpath("//responseCode")[0],
            //     'responseMessage' => (string)$xml->xpath("//responseMessage")[0],
            //     'balance' => (float)$xml->xpath("//balance")[0],
            // );

            return $xml;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }

    public function generateCashoutCode($customerName, $customerUsername, $cashoutAmount, $transactionRef, $mobileNumber, $customerAccount)
    {
        $soapBody = "<kon:generateCashOutCode>
        <customerName>{$customerName}</customerName>
        <customerSurname>{$customerUsername}</customerSurname>
        <cashOutAmount>{$cashoutAmount}</cashOutAmount>
        <transactionReference>{$transactionRef}</transactionReference>
        <customerMobile>{$mobileNumber}</customerMobile>
        <customerAccountID>{$customerAccount}</customerAccountID>
     </kon:generateCashOutCode>";

        try {
            $response = $this->makeRequest($soapBody);
            $xml = simplexml_load_string($response);

            // $ns = $xml->getNamespaces(true)['ns2'];

            // $result = array(
            //     'responseCode' => (string)$xml->xpath("//responseCode")[0],
            //     'responseMessage' => (string)$xml->xpath("//responseMessage")[0],
            //     'balance' => (float)$xml->xpath("//balance")[0],
            // );

            return $xml;
        } catch (Exception $e) {
            throw new Exception($e->getMessage());
        }
    }
}
