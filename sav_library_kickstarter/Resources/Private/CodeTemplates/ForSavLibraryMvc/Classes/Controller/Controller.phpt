<?php
<sav:function name="removeEmptyLines" arguments="{keepLine:'!'}">
<f:alias map="{
    queryIndex:     '{extension->sav:getItem(key:\'forms\')->sav:getItem(key:itemKey)->sav:getItem(key:\'query\')}'
}">
<f:alias map="{
    vendorName:     '{extension.general.1.vendorName}',
    extensionName:  '{extension.general.1.extensionKey->sav:upperCamel()}',
    controllerName: '{extension.forms->sav:getItem(key:itemKey)->sav:getItem(key:\'title\')->sav:upperCamel()}',
    mainModelName:  '{extension.queries->sav:getItem(key:queryIndex)->sav:getItem(key:\'mainTable\')->sav:Mvc.getModelFromTableName(extension:extension.general.1.extensionKey)}',    
    controller:     '{extension.forms->sav:getItem(key:itemKey)}'
}">
namespace {vendorName}\{extensionName}\Controller;
!
/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with TYPO3 source code.
 *
 * The TYPO3 project - inspiring people to share!
 */
!
/**
 * Controller for the form {controllerName}
 *
 */
class {controllerName}Controller extends \YolfTypo3\SavLibraryMvc\Controller\DefaultController
{

    /**
     * Main repository
     * 
     * @var <f:format.raw>\{vendorName}\{extensionName}\Domain\Repository\{mainModelName}Repository</f:format.raw>
     * @TYPO3\CMS\Extbase\Annotation\Inject
     * @extensionScannerIgnoreLine
     * @inject
     */
    protected $mainRepository = null;
!
    /**
     * Subform repository class names
     *
     * @var array
     */
    protected $subforms = [
        <f:for each="{sav:Mvc.SubformIndexManager(action:'getSubforms')}" as="subform">
        [
            'repository' => '{vendorName}\\{extensionName}\\Domain\\Repository\\{subform.tableName}Repository',
            'fieldName' => '{subform.fieldName}',
            'foreignRepository' => '{vendorName}\\{extensionName}\\Domain\\Repository\\{subform.foreignTableName}Repository',
        ],
        </f:for>
    ];
 !
    /**
     * Save action for this controller
     *
     * @param \{vendorName}\{extensionName}\Domain\Model\{mainModelName} $data
     * @return void
     */
    public function saveAction(\{vendorName}\{extensionName}\Domain\Model\{mainModelName} $data)
    {
        $this->save($data);
    }
}
?>
</f:alias>
</f:alias>
</sav:function>
