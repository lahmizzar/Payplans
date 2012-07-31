<?php
/**
 * Layout of parameters needed to be shown on edit screen after any manipulation , goes here 
 */


if(defined('_JEXEC')===false) die();?>
<div class="pp-edit">
<form action="<?php echo $uri; ?>" method="post" name="adminForm" id="adminForm">

<!--  -->
	<div class="pp-alpha pp-grid_6">
		<fieldset class="pp-parameter">
		<legend> <?php echo XiText::_('COM_PAYPLANS_EXAMPLEMVC_EDIT_DETAILS' ); ?> </legend>
			
			<!-- Title -->
			<div class="pp-row pp-grid_12">
					<div class="pp-col pp-label">
						<span class="hasTip" title="<?php echo XiText::_('COM_PAYPLANS_EXAMPLEMVC_EDIT_TOOLTIP_TITLE') ?>" >
										 		<?php echo XiText::_('COM_PAYPLANS_EXAMPLEMVC_EDIT_TITLE') ?> 
					 	</span>
					 </div>
					 <div class="pp-col pp-input">
						<input class="required" name="title"  type="text" value="<?php echo $tmpVar->get('title'); ?>" />
					</div>
			</div>	
		</fieldset>
</div>		
	
	<input type="hidden" name="task" value="save" />
</form>
</div>
<?php 
