<tagLib name="fanwe" />
<include file="Public:header" />
<form method='post' id="form" name="form" action="{:U(MODULE_NAME.'/changePwd')}">
<table cellpadding="4" cellspacing="0" border="0" class="table-form">
	<tr>
		<th width="200">{%ADMIN_NAME}</th>
		<td><p>{$admin.admin_name}</p></td>
	</tr>
	<tr>
		<th>{%OLD_PWD}</th>
		<td><input type="password" class="textinput requireinput" name="old_pwd" id="old_pwd" /></td>
	</tr>
	<tr>
		<th>{%NEW_PWD}</th>
		<td><input type="password" class="textinput requireinput" name="new_pwd" id="new_pwd" /></td>
	</tr>
	<tr>
		<th>{%CONFIRM_PWD}</th>
		<td><input type="password" class="textinput requireinput" name="confirm_pwd" id="confirm_pwd" /></td>
	</tr>
	<tr>
		<th>&nbsp;</th>
		<td>
			<input type="submit" class="submit_btn" value="{%SUBMIT}" />
			<input type="reset" class="reset_btn" value="{%RESET}" />
		</td>
	</tr>
</table>
</form>
<include file="Public:footer" />