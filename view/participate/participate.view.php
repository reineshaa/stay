<?php

class ParticipateView extends ParticipateController{
    public function show(){
        $participates = $this->getParticipate();

        foreach ($participates as $participate) { ?>
            <tr>
                <td><?php echo $participate['id']; ?></td>
                <td><?php echo $participate['nama']; ?></td>
                <td><?php echo $participate['kontak']; ?></td>
                <td><?php echo $participate['angkatan']; ?></td>
                <td><?php echo $participate['acara']; ?></td>
                <td><?php echo $participate['lokasi']; ?></td>
                <td><?php echo $participate['tanggal']; ?></td>
                <td><?php echo $participate['status']; ?></td>
            </tr>
<?php
        }
    }

    public function find()
    {
        $detailParticipate = $this->getParticipateBy();
        if(empty($detailParticipate))
            return;
        foreach ($detailParticipate as $detail) { ?>
            <div>
                <h3><?php echo $detail['nama']; ?></h3>
                <p>kontak: <?php echo $detail['kontak']; ?></p>
                <p>angkatan: <?php echo $detail['angkatan']; ?></p>
                <p>acara: <?php echo $detail['acara']; ?></p>
                <p>lokasi: <?php echo $detail['lokasi']; ?></p>
                <p>tanggal: <?php echo $detail['tanggal']; ?></p>
                <p>status: <?php echo $detail['status']; ?></p>
            </div>
            <?php
        }
    }
}
            ?>