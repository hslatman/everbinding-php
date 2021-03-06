<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;

return Config::create()
    ->setWsdl('config/testapi.everbinding.nl.v3.wsdl.xml')
    ->setTypeDestination('client/Type')
    ->setTypeNamespace('Slatman\EVerbinding\Type')
    ->setClientDestination('client')
    ->setClientName('EVerbindingClient')
    ->setClientNamespace('Slatman\EVerbinding')
    ->setClassMapDestination('client')
    ->setClassMapName('EVerbindingClassmap')
    ->setClassMapNamespace('Slatman\EVerbinding')
    ->addSoapOption('user_agent', 'hslatman/everbinding-php-0.1.0') // This does not seem to work (yet)
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler()),
            ]),
            '//i'
        )
    )
    ->addRule(
        new Rules\TypenameMatchesRule(
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ]),
            '/Response/i'
        )
    )
;
