<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title><?= $pagetitle ?></title>

        <link rel="stylesheet" href="/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="/assets/vendors/css/vendor.bundle.addons.css">
        <link rel="stylesheet" href="/assets/css/style.css">
        <link rel="shortcut icon" href="/assets/images/favicon.png" />
    </head>

    <body>
    <div class="container-scroller">
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo text-dark mt-3">
                    <h3><b>L</b>.<b>S</b> Police Dept.</h3>
                </a>
                <a class="navbar-brand brand-logo-mini">
                    <img src="/assets/images/logo-mini.svg" alt="logo" />
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-right">
                    <!-- 
                            
                        Soon.. Or never xD
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-file-document-box"></i>
                        <span class="count">7</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                        <div class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 7 unread mails
                            </p>
                            <span class="badge badge-info badge-pill float-right">View all</span>
                        </div>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                            <img src="/assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
                                <span class="float-right font-weight-light small-text">1 Minutes ago</span>
                            </h6>
                            <p class="font-weight-light small-text">
                                The meeting is cancelled
                            </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                            <img src="/assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
                                <span class="float-right font-weight-light small-text">15 Minutes ago</span>
                            </h6>
                            <p class="font-weight-light small-text">
                                New product launch
                            </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                            <img src="/assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow">
                            <h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
                                <span class="float-right font-weight-light small-text">18 Minutes ago</span>
                            </h6>
                            <p class="font-weight-light small-text">
                                Upcoming board meeting
                            </p>
                            </div>
                        </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell"></i>
                        <span class="count">4</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item">
                            <p class="mb-0 font-weight-normal float-left">You have 4 new notifications
                            </p>
                            <span class="badge badge-pill badge-warning float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                            <div class="preview-icon bg-success">
                                <i class="mdi mdi-alert-circle-outline mx-0"></i>
                            </div>
                            </div>
                            <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
                            <p class="font-weight-light small-text">
                                Just now
                            </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                            <div class="preview-icon bg-warning">
                                <i class="mdi mdi-comment-text-outline mx-0"></i>
                            </div>
                            </div>
                            <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
                            <p class="font-weight-light small-text">
                                Private message
                            </p>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                            <div class="preview-icon bg-info">
                                <i class="mdi mdi-email-outline mx-0"></i>
                            </div>
                            </div>
                            <div class="preview-item-content">
                            <h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
                            <p class="font-weight-light small-text">
                                2 days ago
                            </p>
                            </div>
                        </a>
                        </div>
                    </li>
                    -->
                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="nav-link">
                            <span class="profile-text">Bonjour, Thomas Branthys !</span>
                            <img class="img-xs rounded-circle" src="https://cdn.discordapp.com/avatars/415987765474492437/71bb4a200d99204b5f376a935959cca8.png" alt="Profile image">
                        </a>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="icon-menu"></span>
                </button>
            </div>
        </nav>
        
        <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <img src="https://cdn.discordapp.com/avatars/415987765474492437/71bb4a200d99204b5f376a935959cca8.png" alt="profile image">
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">Thomas Branthys</p>
                                <div>
                                    <small class="designation text-muted">Fondateur & Développeur</small>
                                    <span class="status-indicator online"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/">
                    <i class="menu-icon mdi mdi-television"></i>
                    <span class="menu-title">Tableau de bord</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                    <i class="menu-icon mdi mdi-content-copy"></i>
                    <span class="menu-title">Recensements</span>
                    <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic">
                    <ul class="nav flex-column sub-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="/FSPRT/">FSPRT</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/casier-judiciaire/">Casier Judiciaire</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/citoyens-vigilants/">Citoyens Vigilants</a>
                        </li>
                    </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/espace-juridique/">
                        <i class="menu-icon mdi mdi-backup-restore"></i>
                        <span class="menu-title">Espace juridique</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/gestion-du-personnels/">
                        <i class="menu-icon mdi mdi-account-multiple"></i>
                        <span class="menu-title">Gestion du personnels</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                        <i class="menu-icon mdi mdi-account"></i>
                        <span class="menu-title">Mon compte</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="https://citoyen.virtual-roleplay.fr/mon-compte/" target="_BLANK"> Modifier les paramètres</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/deconnexion/">
                        <i class="menu-icon mdi mdi-logout"></i>
                        <span class="menu-title"><div class="badge badge-danger">Déconnexion du compte</div></span>
                    </a>
                </li>
            </ul>
        </nav>

        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row purchace-popup">
                    <div class="col-12">
                    <span class="d-flex alifn-items-center">
                        <p><u>Aimez ce que vous voyez?</u> Sachez que <b>cette réalisation à couter plus de 80 heures de travail</b> !<br /> Si vous souhaitez soutenir le travail de notre équipe souscrit au "Club's Membre"</p>
                        <a href="https://www.patreon.com/VirtualRoleplay" target="_blank" class="btn ml-auto btn purchase-button">Acheter le Club's Membre</a>
                        <i class="mdi mdi-close popup-dismiss"></i>
                    </span>
                    </div>
                </div>