<ul class="nav">
  <li class="nav-item nav-category">Main</li>
  
  <li class="nav-item">
    <a href="?hal=dashboard" class="nav-link">
      <i class="link-icon" data-feather="box"></i>
      <span class="link-title">Home</span>
    </a>
  </li>

  <li class="nav-item nav-category">Master Data</li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#tanaman" role="button" aria-expanded="false" aria-controls="tanaman">
      <i class="link-icon" data-feather="bookmark"></i>
      <span class="link-title">Data Tanaman</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="tanaman">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="?hal=tanaman/olah" class="nav-link">Tambah Tanaman</a>
        </li>

        <li class="nav-item">
          <a href="?hal=tanaman/data" class="nav-link">Data Tanaman</a>
        </li>

        <li class="nav-item">
          <a href="?hal=tanaman/koefisien" class="nav-link">Koefisien Tanaman</a>
        </li>

        <li class="nav-item">
          <a href="?hal=tanaman/olah_analisis" class="nav-link">Setting Persiapan</a>
        </li>

      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#spp" role="button" aria-expanded="false" aria-controls="spp">
      <i class="link-icon" data-feather="award"></i>
      <span class="link-title">Data Golongan</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="spp">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="?hal=golongan/data" class="nav-link">Data Golongan</a>
        </li>
        <li class="nav-item">
          <a href="?hal=golongan/olah" class="nav-link">Tambah Golongan</a>
        </li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#jadwal" role="button" aria-expanded="false" aria-controls="jadwal">
      <i class="link-icon" data-feather="heart"></i>
      <span class="link-title">Jadwal Tanam</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="jadwal">
      <ul class="nav sub-menu">
        <?php
        $sql="SELECT * FROM tb_golongan";
        foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
          extract($value);
          ?>
          <li class="nav-item">
            <a href="?hal=jadwal/data&id=<?=$idgolongan?>" class="nav-link"><?=$namagolongan?></a>
          </li>
        <?php } ?>


      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#kebutuhan" role="button" aria-expanded="false" aria-controls="kebutuhan">
      <i class="link-icon" data-feather="activity"></i>
      <span class="link-title">Kebutuhan Air</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="kebutuhan">
      <ul class="nav sub-menu">
        <?php
        $sql="SELECT * FROM tb_tanaman";
        foreach (_dataGetAll($mysqli,$sql) as $key => $value) {
          extract($value);
          if($jenis=='Padi'){
            ?>
            <li class="nav-item">
              <a href="?hal=kebutuhan/data_padi&id=<?=$idtanaman?>" class="nav-link"><?=$nama?></a>
            </li>
          <?php }else{ ?>
           <li class="nav-item">
            <a href="?hal=kebutuhan/data_palawija&id=<?=$idtanaman?>" class="nav-link"><?=$nama?></a>
          </li>
        <?php }} ?>


      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#intake" role="button" aria-expanded="false" aria-controls="intake">
      <i class="link-icon" data-feather="check-circle"></i>
      <span class="link-title">Ketersediaan Air</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="intake">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="?hal=intake/data" class="nav-link">Data Intake</a>
        </li>
      </ul>
    </div>
  </li>

  <li class="nav-item">
    <a class="nav-link" data-toggle="collapse" href="#polatanam" role="button" aria-expanded="false" aria-controls="polatanam">
      <i class="link-icon" data-feather="box"></i>
      <span class="link-title">Pola Tanam</span>
      <i class="link-arrow" data-feather="chevron-down"></i>
    </a>
    <div class="collapse" id="polatanam">
      <ul class="nav sub-menu">
        <li class="nav-item">
          <a href="?hal=polatanam/input" class="nav-link">Input</a>
        </li>
      </ul>
    </div>
  </li>


</ul>