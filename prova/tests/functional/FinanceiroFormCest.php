<?php

class FinanceiroFormCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('financeiro/create');
    }

    public function criarFormSemValor(FunctionalTester $I){
        $I->submitForm('form',[
            'financeiro[id_cliente]' => '1',
            'financeiro[id_dr]' => '1',
            'financeiro[data]' => '22/12/2020',
            'financeiro[forma]' => '1',
        ]);

        $I->see('Update');
    }
}