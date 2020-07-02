<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
    <!-- Text Logo - Use this if you don't have a graphic logo -->
    <!-- <a class="navbar-brand logo-text page-scroll" href="index.html">Leno</a> -->

    <!-- Image Logo -->
    <a class="navbar-brand logo-image" href="<?= base_url() ?>" style="text-decoration: none">
        <span style="font-family: Fipps;color: #00c9db;font-size: 24px;">
            Flapping Bird
        </span>
    </a> 
    
    <!-- Mobile Menu Toggle Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-awesome fas fa-bars"></span>
        <span class="navbar-toggler-awesome fas fa-times"></span>
    </button>
    <!-- end of mobile menu toggle button -->
    <?php 
    $first_menu = [''];
    $dataLogin = $this->session->userdata('loginUser');
    $uri = $this->uri->segment(1);
    $true = true;
    if (in_array($uri, $first_menu)) {
        $true = false;
    }
    ?>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?= (!$true?'#header':base_url('#header')) ?>">HOME</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?= (!$true?'#features':base_url('#features')) ?>">HIGH SCORE</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?= base_url('game/play') ?>">GAME</a>
            </li>
            <?php if (empty($dataLogin)) {?>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?= base_url('login') ?>">LOGIN</a>
            </li>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?= base_url('login/register') ?>">REGISTER</a>
            </li>
            <?php }else{ ?>
            <li class="nav-item">
                <a class="nav-link page-scroll" href="<?= base_url('login/log') ?>">LOGOUT</a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav> <!-- end of navbar -->
<!-- end of navigation -->