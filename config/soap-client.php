<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;

return Config::create()
    ->setWsdl('testapi.everbinding.nl.v3.wsdl.xml')
    ->setTypeDestination('client/Type')
    ->setTypeNamespace('Slatman\Type')
    ->setClientDestination('client')
    ->setClientName('eVerbindingClient')
    ->setClientNamespace('Slatman')
    ->setClassMapDestination('client')
    ->setClassMapName('eVerbindingClassmap')
    ->setClassMapNamespace('Slatman')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
;
