<?php

declare(strict_types=1);


namespace App\Forms\BrokerAccount;


use Gaia\Tekton\Component\Form;
use Gaia\Tekton\Component\Value\ButtonPlacement;
use Gaia\Tekton\Component\Value\FieldType;

class UpdateBrokerAccountForm extends Form
{
    public function __construct()
    {
        parent::__construct(
            'PUT',
            '/broker-accounts',
            'broker-account-form',
            'Edit Broker Account',
            [
                'button' => [
                    'placement' => [
                        'vertical' => ButtonPlacement::BOTTOM,
                        'horizontal' => ButtonPlacement::RIGHT
                    ],
                    'action' => [
                        'submit' => [
                            'text' => 'Edit'
                        ]
                    ]
                ],
                'labelAlign' => ''
            ]
        );
    }

    /**
     * @param array $values
     */
    protected function build(array $values = []): void
    {
        $this->addField('code', 'Code', FieldType::TEXT)
            ->setPlaceholder('Broker Account Code (ex: PD-Reguler)')
            ->setDefaultValue($values['code']);

        $this->addField('name', 'Name', FieldType::TEXT)
            ->setPlaceholder('Broker Account Name')
            ->setDefaultValue($values['name']);

        $this->addField('buy_commission', 'Buy Fee', FieldType::NUMBER)
            ->setPlaceholder('Buy Fee')
            ->setDefaultValue($values['buy_commission']);

        $this->addField('sell_commission', 'Sell Fee', FieldType::NUMBER)
            ->setPlaceholder('Sell Fee')
            ->setDefaultValue($values['sell_commission']);

        $this->addField('margin_interest', 'Margin Interest', FieldType::NUMBER)
            ->setPlaceholder('Margin Daily Interest')
            ->setDefaultValue($values['margin_interest']);
    }
}