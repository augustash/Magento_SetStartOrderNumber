<?php
/**
 * @package    Aschroder_SetStartOrderNumber
 * @author     Ashley Schroder (aschroder.com)
 */
class Aschroder_SetStartOrderNumber_Block_System_Config_Info extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{
    /**
     * Render fieldset html
     *
     * @param   Varien_Data_Form_Element_Abstract $element
     * @return  string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        $html = '
            <style>
                .info-wrapper {
                    background: #fff;
                    border: 1px solid #CCCCCC;
                    margin-bottom: 1rem;
                    padding: 1rem;
                    height: auto;
                }

                .info-wrapper h2 { font-size: 1.125rem; }
                .info-wrapper h3 { font-size: 1rem; }
                .info-wrapper h4 { font-size: 0.9rem; }
                .info-wrapper h5 { font-size: 0.9rem; }

                .info-wrapper p, li {
                    font-size: 0.8rem;
                }
                .info-wrapper p.large {
                    font-size: 1rem;
                }

                .info-wrapper ul {
                    padding-left: 1rem;
                    list-style: disc;
                }

                .info-wrapper code {
                    color: #d02630;
                    font-weight: normal;
                }
            </style>

            <div class="info-wrapper">
                <h2>ASchroder.com Set Starting Order Number</h2>
                <p class="large">This extension will allow you to choose your starting order number, invoice number, shipment number and credit memo number. Simply enter your chosen values in the box below, click <strong>Save Config</strong> to save the settings and then <strong>Run Update</strong> to apply the new increment IDs.</p>
                <p>The numbers will be 9 digits long, with a prefix and then your number. If you choose a number less than 9 digits long, Magento will pad it out with <code>0</code>s. You can override that padding behavior by choosing Yes to disable padding. You can also choose to disable the prefix.</p>
                <p><strong>It is SERIOUSLY important that you don\'t set the number back lower than existing orders, otherwise you\'ll end up with duplicates, and a world of hurt - you\'ve been warned :)<strong></p>
            </div>';

        return $html;
    }
}
