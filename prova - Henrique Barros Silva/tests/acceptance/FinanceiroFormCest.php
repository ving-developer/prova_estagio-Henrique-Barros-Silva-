<?php
class FinanceiroFormCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnRoute('financeiro/create');
    }

    public function criarFormSemValor(AcceptanceTester $I){
        $I->amOnPage('/financeiro/create');
        $I->waitForText('Adicionar Financeiro');

        $I->fillField('#financeiro-id_cliente', '1');
        $I->fillField('#financeiro-id_dr', '1');
        $I->fillField('#financeiro-data','30-01-2020');
        $I->fillField('#financeiro-forma', '3');
        $I->fillField('#financeiro-vencimento', '06/12/2019');
        $I->click('#Salvar');
        $I->waitForText("Atualizar");
    }
}
?>
