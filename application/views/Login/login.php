<body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <?php $FormClass = array('class' => 'sign-in-form'); echo form_open_multipart('homepage/login_manual',$FormClass);?>
            <h2 class="title">Masuk dengan email</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Masukan Email" name="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" value="Masuk" name="submit" class="btn solid" />
            <p class="social-text">Atau masuk dengan Google akun</p>
            <div class="social-media">
              <a href="<?=$auth_url;?>" class="social-icon">
                <img class="icons-1" src="<?=base_url('assets/icons/google-icon.svg');?>" width="24" height="24"> Masuk dengan Google
              </a>
            </div>
          <?php echo form_close();?>
          <?php $FormClass = array('class' => 'sign-up-form'); echo form_open_multipart('homepage/register',$FormClass);?>
            <h2 class="title">Daftar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="name" type="text" placeholder="Nama lengkap" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name="phone" type="tel" placeholder="No. HP (08123xxxxx)" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Password" />
            </div>
            <button type="submit" name="submit" class="btn">Daftar</button>
            <p class="social-text">atau daftar dengan akun google</p>
            <div class="social-media">
              <a href="<?=$auth_url;?>" class="social-icon">
                <img class="icons-1" src="<?=base_url('assets/icons/google-icon.svg');?>" width="24" height="24"> Register dengan Google
              </a>
            </div>
          <?php echo form_close();?>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <?php 
              if (!empty($this->session->flashdata('insert'))){
                echo '<p class="alert"><strong>Gagal ! :</strong>&nbsp;' . $this->session->flashdata('insert') . '</p>';
              }else
            ?>
            <h3>Belum punya akun ?</h3>
            <p>
              Daftar akun baru sekarang, untuk menikmati kenyamanan pendakian
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Daftar
            </button>
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Telah memiliki akun ?</h3>
            <br>
            <br>
            <button class="btn transparent" id="sign-in-btn">
              Masuk
            </button>
          </div>
          <img src="img/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>