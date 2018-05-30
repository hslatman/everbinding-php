<?php

namespace Slatman;

use Slatman\Type;
use Phpro\SoapClient\Soap\ClassMap\ClassMapCollection;
use Phpro\SoapClient\Soap\ClassMap\ClassMap;

class eVerbindingClassmap
{

    public static function getCollection() : \Phpro\SoapClient\Soap\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection([
            new ClassMap('Login', Type\Login::class),
            new ClassMap('LoginResponse', Type\LoginResponse::class),
            new ClassMap('GetInboxDocuments', Type\GetInboxDocuments::class),
            new ClassMap('Paging', Type\Paging::class),
            new ClassMap('DocumentSearch', Type\DocumentSearch::class),
            new ClassMap('TimeSpanFilter', Type\TimeSpanFilter::class),
            new ClassMap('DocumentParty', Type\DocumentParty::class),
            new ClassMap('Status', Type\Status::class),
            new ClassMap('Template', Type\Template::class),
            new ClassMap('GetInboxDocumentsResponse', Type\GetInboxDocumentsResponse::class),
            new ClassMap('ArrayOfDocument', Type\ArrayOfDocument::class),
            new ClassMap('Document', Type\Document::class),
            new ClassMap('Transaction', Type\Transaction::class),
            new ClassMap('PagingResponse', Type\PagingResponse::class),
            new ClassMap('Authentication', Type\Authentication::class),
            new ClassMap('GetInboxDocument', Type\GetInboxDocument::class),
            new ClassMap('GetInboxDocumentResponse', Type\GetInboxDocumentResponse::class),
            new ClassMap('DocumentDetails', Type\DocumentDetails::class),
            new ClassMap('Payload', Type\Payload::class),
            new ClassMap('StatusDetails', Type\StatusDetails::class),
            new ClassMap('StatusInfo', Type\StatusInfo::class),
            new ClassMap('ArrayOfStatus', Type\ArrayOfStatus::class),
            new ClassMap('SetInboxDocumentStatus', Type\SetInboxDocumentStatus::class),
            new ClassMap('SetInboxDocumentStatusResponse', Type\SetInboxDocumentStatusResponse::class),
            new ClassMap('GetInboxDocumentStatus', Type\GetInboxDocumentStatus::class),
            new ClassMap('GetInboxDocumentStatusResponse', Type\GetInboxDocumentStatusResponse::class),
            new ClassMap('GetOutboxDocuments', Type\GetOutboxDocuments::class),
            new ClassMap('GetOutboxDocumentsResponse', Type\GetOutboxDocumentsResponse::class),
            new ClassMap('GetOutboxDocument', Type\GetOutboxDocument::class),
            new ClassMap('GetOutboxDocumentResponse', Type\GetOutboxDocumentResponse::class),
            new ClassMap('GetOutboxDocumentStatus', Type\GetOutboxDocumentStatus::class),
            new ClassMap('GetOutboxDocumentStatusResponse', Type\GetOutboxDocumentStatusResponse::class),
            new ClassMap('GetDocuments', Type\GetDocuments::class),
            new ClassMap('GetDocumentsResponse', Type\GetDocumentsResponse::class),
            new ClassMap('GetDocument', Type\GetDocument::class),
            new ClassMap('GetDocumentResponse', Type\GetDocumentResponse::class),
            new ClassMap('SendDocument', Type\SendDocument::class),
            new ClassMap('SenderVia', Type\SenderVia::class),
            new ClassMap('Recipient', Type\Recipient::class),
            new ClassMap('SendDocumentResponse', Type\SendDocumentResponse::class),
            new ClassMap('GetDocumentPdf', Type\GetDocumentPdf::class),
            new ClassMap('GetDocumentPdfResponse', Type\GetDocumentPdfResponse::class),
            new ClassMap('FileDocument', Type\FileDocument::class),
            new ClassMap('GetParties', Type\GetParties::class),
            new ClassMap('SearchParty', Type\SearchParty::class),
            new ClassMap('GetPartiesResponse', Type\GetPartiesResponse::class),
            new ClassMap('ArrayOfParty', Type\ArrayOfParty::class),
            new ClassMap('Party', Type\Party::class),
            new ClassMap('Address', Type\Address::class),
            new ClassMap('GetParty', Type\GetParty::class),
            new ClassMap('GetPartyResponse', Type\GetPartyResponse::class),
            new ClassMap('PartyDetails', Type\PartyDetails::class),
            new ClassMap('GetAccountDetails', Type\GetAccountDetails::class),
            new ClassMap('GetAccountDetailsResponse', Type\GetAccountDetailsResponse::class),
            new ClassMap('Account', Type\Account::class),
            new ClassMap('GetAccountParties', Type\GetAccountParties::class),
            new ClassMap('SearchAccountParty', Type\SearchAccountParty::class),
            new ClassMap('GetAccountPartiesReponse', Type\GetAccountPartiesReponse::class),
            new ClassMap('ArrayOfPartyAccountDetails', Type\ArrayOfPartyAccountDetails::class),
            new ClassMap('PartyAccountDetails', Type\PartyAccountDetails::class),
        ]);
    }


}

