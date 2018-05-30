<?php

namespace Slatman\EVerbinding;

class EVerbindingClient extends \Phpro\SoapClient\Client
{

    public function login(\Slatman\EVerbinding\Type\Login $Login) : \Slatman\EVerbinding\Type\LoginResponse
    {
        return $this->call('Login', $Login);
    }

    public function getInboxDocuments(\Slatman\EVerbinding\Type\GetInboxDocuments $GetInboxDocuments) : \Slatman\EVerbinding\Type\GetInboxDocumentsResponse
    {
        return $this->call('GetInboxDocuments', $GetInboxDocuments);
    }

    public function getInboxDocument(\Slatman\EVerbinding\Type\GetInboxDocument $GetInboxDocument) : \Slatman\EVerbinding\Type\GetInboxDocumentResponse
    {
        return $this->call('GetInboxDocument', $GetInboxDocument);
    }

    public function setInboxDocumentStatus(\Slatman\EVerbinding\Type\SetInboxDocumentStatus $SetInboxDocumentStatus) : \Slatman\EVerbinding\Type\SetInboxDocumentStatusResponse
    {
        return $this->call('SetInboxDocumentStatus', $SetInboxDocumentStatus);
    }

    public function getInboxDocumentStatus(\Slatman\EVerbinding\Type\GetInboxDocumentStatus $GetInboxDocumentStatus) : \Slatman\EVerbinding\Type\GetInboxDocumentStatusResponse
    {
        return $this->call('GetInboxDocumentStatus', $GetInboxDocumentStatus);
    }

    public function getOutboxDocuments(\Slatman\EVerbinding\Type\GetOutboxDocuments $GetOutboxDocuments) : \Slatman\EVerbinding\Type\GetOutboxDocumentsResponse
    {
        return $this->call('GetOutboxDocuments', $GetOutboxDocuments);
    }

    public function getOutboxDocument(\Slatman\EVerbinding\Type\GetOutboxDocument $GetOutboxDocument) : \Slatman\EVerbinding\Type\GetOutboxDocumentResponse
    {
        return $this->call('GetOutboxDocument', $GetOutboxDocument);
    }

    public function getOutboxDocumentStatus(\Slatman\EVerbinding\Type\GetOutboxDocumentStatus $GetOutboxDocumentStatus) : \Slatman\EVerbinding\Type\GetOutboxDocumentStatusResponse
    {
        return $this->call('GetOutboxDocumentStatus', $GetOutboxDocumentStatus);
    }

    public function getDocuments(\Slatman\EVerbinding\Type\GetDocuments $GetDocuments) : \Slatman\EVerbinding\Type\GetDocumentsResponse
    {
        return $this->call('GetDocuments', $GetDocuments);
    }

    public function getDocument(\Slatman\EVerbinding\Type\GetDocument $GetDocument) : \Slatman\EVerbinding\Type\GetDocumentResponse
    {
        return $this->call('GetDocument', $GetDocument);
    }

    public function sendDocument(\Slatman\EVerbinding\Type\SendDocument $SendDocument) : \Slatman\EVerbinding\Type\SendDocumentResponse
    {
        return $this->call('SendDocument', $SendDocument);
    }

    public function getDocumentPdf(\Slatman\EVerbinding\Type\GetDocumentPdf $GetDocumentPdf) : \Slatman\EVerbinding\Type\GetDocumentPdfResponse
    {
        return $this->call('GetDocumentPdf', $GetDocumentPdf);
    }

    public function getParties(\Slatman\EVerbinding\Type\GetParties $GetParties) : \Slatman\EVerbinding\Type\GetPartiesResponse
    {
        return $this->call('GetParties', $GetParties);
    }

    public function getParty(\Slatman\EVerbinding\Type\GetParty $GetParty) : \Slatman\EVerbinding\Type\GetPartyResponse
    {
        return $this->call('GetParty', $GetParty);
    }

    public function getAccountDetails(\Slatman\EVerbinding\Type\GetAccountDetails $GetAccountDetails) : \Slatman\EVerbinding\Type\GetAccountDetailsResponse
    {
        return $this->call('GetAccountDetails', $GetAccountDetails);
    }

    public function getAccountParties(\Slatman\EVerbinding\Type\GetAccountParties $GetAccountParties) : \Slatman\EVerbinding\Type\GetAccountPartiesReponse
    {
        return $this->call('GetAccountParties', $GetAccountParties);
    }


}

