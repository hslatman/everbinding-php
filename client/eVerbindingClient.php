<?php

namespace Slatman;

class eVerbindingClient extends \Phpro\SoapClient\Client
{

    public function login(\Slatman\Type\Login $Login) : \Slatman\Type\LoginResponse
    {
        return $this->call('Login', $Login);
    }

    public function getInboxDocuments(\Slatman\Type\GetInboxDocuments $GetInboxDocuments) : \Slatman\Type\GetInboxDocumentsResponse
    {
        return $this->call('GetInboxDocuments', $GetInboxDocuments);
    }

    public function getInboxDocument(\Slatman\Type\GetInboxDocument $GetInboxDocument) : \Slatman\Type\GetInboxDocumentResponse
    {
        return $this->call('GetInboxDocument', $GetInboxDocument);
    }

    public function setInboxDocumentStatus(\Slatman\Type\SetInboxDocumentStatus $SetInboxDocumentStatus) : \Slatman\Type\SetInboxDocumentStatusResponse
    {
        return $this->call('SetInboxDocumentStatus', $SetInboxDocumentStatus);
    }

    public function getInboxDocumentStatus(\Slatman\Type\GetInboxDocumentStatus $GetInboxDocumentStatus) : \Slatman\Type\GetInboxDocumentStatusResponse
    {
        return $this->call('GetInboxDocumentStatus', $GetInboxDocumentStatus);
    }

    public function getOutboxDocuments(\Slatman\Type\GetOutboxDocuments $GetOutboxDocuments) : \Slatman\Type\GetOutboxDocumentsResponse
    {
        return $this->call('GetOutboxDocuments', $GetOutboxDocuments);
    }

    public function getOutboxDocument(\Slatman\Type\GetOutboxDocument $GetOutboxDocument) : \Slatman\Type\GetOutboxDocumentResponse
    {
        return $this->call('GetOutboxDocument', $GetOutboxDocument);
    }

    public function getOutboxDocumentStatus(\Slatman\Type\GetOutboxDocumentStatus $GetOutboxDocumentStatus) : \Slatman\Type\GetOutboxDocumentStatusResponse
    {
        return $this->call('GetOutboxDocumentStatus', $GetOutboxDocumentStatus);
    }

    public function getDocuments(\Slatman\Type\GetDocuments $GetDocuments) : \Slatman\Type\GetDocumentsResponse
    {
        return $this->call('GetDocuments', $GetDocuments);
    }

    public function getDocument(\Slatman\Type\GetDocument $GetDocument) : \Slatman\Type\GetDocumentResponse
    {
        return $this->call('GetDocument', $GetDocument);
    }

    public function sendDocument(\Slatman\Type\SendDocument $SendDocument) : \Slatman\Type\SendDocumentResponse
    {
        return $this->call('SendDocument', $SendDocument);
    }

    public function getDocumentPdf(\Slatman\Type\GetDocumentPdf $GetDocumentPdf) : \Slatman\Type\GetDocumentPdfResponse
    {
        return $this->call('GetDocumentPdf', $GetDocumentPdf);
    }

    public function getParties(\Slatman\Type\GetParties $GetParties) : \Slatman\Type\GetPartiesResponse
    {
        return $this->call('GetParties', $GetParties);
    }

    public function getParty(\Slatman\Type\GetParty $GetParty) : \Slatman\Type\GetPartyResponse
    {
        return $this->call('GetParty', $GetParty);
    }

    public function getAccountDetails(\Slatman\Type\GetAccountDetails $GetAccountDetails) : \Slatman\Type\GetAccountDetailsResponse
    {
        return $this->call('GetAccountDetails', $GetAccountDetails);
    }

    public function getAccountParties(\Slatman\Type\GetAccountParties $GetAccountParties) : \Slatman\Type\GetAccountPartiesReponse
    {
        return $this->call('GetAccountParties', $GetAccountParties);
    }


}

