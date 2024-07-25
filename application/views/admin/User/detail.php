<div class="content-wrapper">
    <section class="content">
        <h4><strong>DETAIL DATA USER</strong></h4>
        <Table class="table">
            <tr>
                <th>Username</th>
                <td><?php echo $detail->username ?></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><?php echo $detail->password ?></td>
            </tr>
            <tr>
                <th>Nama Lengkap</th>
                <td><?php echo $detail->nama_lengkap ?></td>
            </tr>
            <tr>
                <th>Bio</th>
                <td><?php echo $detail->bio ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo $detail->email ?></td>
            </tr>
            <tr>
                <th>Level</th>
                <td><?php echo $detail->level ?></td>
            </tr>
            <tr>
                <td>
                    <img src="<?php echo base_url(); ?>assets/profil/<?php echo $detail->image; ?>" width="90" height="110">
                </td>
            </tr>
        </Table>
        <a href="<?php echo base_url('dashboardAdmin/tampilUserAdmin'); ?>" class="btn btn-primary">Kembali</a>
    </section>
</div>