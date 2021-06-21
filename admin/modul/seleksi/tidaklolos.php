<?php
if(!isset($_GET['id'])):
  $sqlwhere="";
  $namakecamatan="Semua";
else:
  $id=@$_GET['id'];
  $sqlwhere=" and idkecamatan='$id'";
  $namakecamatan=_dataCustom($mysqli,"select namakecamatan from tb_kecamatan where idkecamatan='$id'");
endif;

?>
<div class="row inbox-wrapper">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <div class="col-lg-3 email-aside border-lg-right">
            <div class="aside-content">
              <div class="aside-header">
                <button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon"><i data-feather="chevron-down"></i></span></button><span class="title">Tidak Lolso Seleksi</span>
              </div>

              <div class="aside-nav collapse">
                <ul class="nav">
                 <li><a href="?hal=seleksi/tidaklolos"><span class="icon"><i data-feather="star"></i></span>Semua<span class="badge badge-info-muted text-white font-weight-bold float-right"></span></a></li>
                 <?php
                 $no=0;
                 $sql="SELECT * FROM tb_kecamatan";
                 foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
                  extract($value);
                  ?>
                  <li><a href="?hal=seleksi/tidaklolos&id=<?=$idkecamatan?>"><span class="icon"><i data-feather="star"></i></span><?=$namakecamatan?><span class="badge badge-info-muted text-white font-weight-bold float-right">
                    <?=_dataCustom($mysqli,"select count(*) from tb_rekrutmen join tb_mitra using(idrekrutmen) where tb_rekrutmen.status='aktif' and tb_mitra.status='tidak lulus' and idkecamatan='$idkecamatan'")?>

                  </span></a></li>
                <?php endforeach; ?>

              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9 email-content">
          <div class="email-inbox-header">
            <div class="row align-items-center">
              <div class="col-lg-6">
                <div class="email-title mb-2 mb-md-0"><span class="icon"><i data-feather="star"></i></span> Kecamatan <span class="new-messages">(<?=$namakecamatan?>)</span> </div>
              </div>
            </div>
          </div>

          <div class="table-responsive">
            <table id="dataTableExample" class="table">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nik</th>
                  <th>Nama</th>
                  <th>JK</th>
                  <th>No Telepon</th>
                  <th>Rekrutmen</th>
                  <th>#</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no=0;
                $sql="SELECT * FROM tb_mitra join tb_rekrutmen using(idrekrutmen) where tb_rekrutmen.status='aktif' and tb_mitra.status='tidak lulus' $sqlwhere";
                foreach (_dataGetAll($mysqli,$sql) as $key => $value) :
                  extract($value);
                  ?>
                  <tr>
                    <td><?=$no+=1?></td>
                    <td><?=$nik?></td>
                    <td><?=$nama?></td>
                    <td><?=$jk?></td>
                    <td><?=$notelepon?></td>
                    <td><?=$namarekrutmen?></td>
                    <td>
                      <?=_detail("?hal=mitra/detail&id=$idmitra")?>
                    </td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>

        </div>
      </div>

    </div>
  </div>
</div>
</div>

<?php

?>