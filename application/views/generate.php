<table>
    <th>no</th>
    <th>nim</th>
    <th>nama</th>
    <th>prodi</th>
    <th>email</th>
  
    <th>hash</th>
    <?php foreach($mhs as $m){ ?>
    <tr>
    <td><?= $m->id ?></td>
    <td><?= $m->nim ?></td>
    <td><?= $m->nama ?></td>
    <td><?= $m->prodi ?></td>
    <td><?= $m->email ?></td>
    
    <td><?php echo password_hash($m->password,PASSWORD_DEFAULT);  ?></td>
    </tr>
    <?php } ?>
</table>