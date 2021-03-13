<?php echo form_open_multipart('homepage/register');?>
<table>
    <tr><td>NAMA</td><td><?php echo form_input('name');?></td></tr>
    <tr><td>username</td><td><?php echo form_input('username');?></td></tr>   
    <tr><td>password</td><td><?php echo form_input('password');?></td></tr>  
    <input type="hidden" name="picture" value="123"> 
    <tr><td>email</td><td><?php echo form_input('email');?></td></tr>        
    <tr><td colspan="2">
        <?php echo form_submit('submit','Simpan');?>
        <?php echo anchor('kontak','Kembali');?></td></tr>
</table>
<?php
echo form_close();
?>