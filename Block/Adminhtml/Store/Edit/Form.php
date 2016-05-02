<?php
namespace Yereone\StoreListing\Block\Adminhtml\Store\Edit;
use Magento\Backend\Block\Widget\Form\Generic;

class Form extends Generic
{
    protected $formFactory;
    protected $coreRegistry;
    public function __construct(\Magento\Backend\Block\Template\Context $context,
                                \Magento\Framework\Registry $registry,
                                \Magento\Framework\Data\FormFactory $formFactory,
                                array $data = [])
    {
        $this->formFactory = $formFactory;
        $this->coreRegistry = $registry;
        parent::__construct($context, $registry, $formFactory);
    }
    public function _prepareForm()
    {
        $store = $this->coreRegistry->registry("edit_store");
        $form = $this->formFactory->create(
                ['data' => ['id' => 'edit_form', 'action' => $this->getData('action'), 'method' => 'post']]
                );
        $fieldset = $form->addFieldset(
                'base_fieldset',
                ['legend' => __('General Information'), 'class' => 'fieldset-wide']
                );
        
//         if ($model->getPostId()) {
//             $fieldset->addField('post_id', 'hidden', ['name' => 'post_id']);
//         }
        
        $fieldset->addField(
                'name',
                'text',
                ['name' => 'Name', 'label' => __('Store Name'), 'title' => __('Store Name'), 'required' => true]
                );
        
        
        $fieldset->addField(
                'is_active',
                'select',
                [
                        'label' => __('Status'),
                        'title' => __('Status'),
                        'name' => 'is_active',
                        'required' => true,
                        'options' => ['1' => __('Enabled'), '0' => __('Disabled')]
                ]
                );
//         if (!$model->getId()) {
//             $model->setData('is_active', '1');
//         }
        
        $fieldset->addField(
                'description',
                'editor',
                [
                        'name' => 'description',
                        'label' => __('Description'),
                        'title' => __('Description'),
                        'style' => 'height:36em',
                        'required' => true
                ]
                );
        
        $form->setValues($store->getData());
        $form->setUseContainer(true);
        $this->setForm($form);
        
        return parent::_prepareForm();
    }
}