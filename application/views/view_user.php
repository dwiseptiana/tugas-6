<section>
    <h1> <?php echo $judul ?></h1>
    <table border="1">
        <tr>
            <th>nama</th>
            <th>alamat</th>
            <th>pekerjaan</th>
        </tr>
        <?php foreach ($user as $u){
    ?>
        <tr>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->alamat ?></td>
            <td><?php echo $u->pekerjaan ?></td>
        </tr>
        <?php } ?>
    </table>

</section>