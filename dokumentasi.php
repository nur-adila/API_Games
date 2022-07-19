<?php

include 'conection/config.php';

session_start();

if (isset($_POST['submit'])) {
    $email  = $_POST['email'];
    $password  = $_POST['password'];

    // cek user
    $sql    = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['emai'] = $email;
        $_SESSION['password'] = $password;
    } else {
        echo "login salah";
    }
}

function generate_token($email, $password)
{

    include 'conection/config.php';

    $token  = md5($email . $password);

    $sql    = "UPDATE user SET key_token='$token' WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result) {

        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
    } else {

        echo "login salah";
    }

    echo $token;
    return $token;
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentasi</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/style1.css">

</head>

<body class="ready sticky" style="margin: 50px;">

    <main>
        <section class="content">
            <article class="markdown-section" id="main">
                <h1 id="token"><a href="#token" class="anchor"><span>Generate Token</span></a></h1>
                <blockquote>
                    <p>Sebelum menggunakan API anda juga perlu melihat token yang anda dapatkan setelah melakukan login.
                    </p>
                </blockquote>
                <h2 id="your-token"><a href="#your-token" data-id="your-token" class="anchor"><span>Your
                            Token</span></a>
                </h2>

                <p style="font-size: 20px; font-weight: 800; color: #e96900; margin-bottom: 20px;">
                    <?php generate_token($_SESSION['email'], $_SESSION['password']); ?></p>

                <h1 id="documentation"><a href="#documentation" class="anchor"><span>Documentation API
                            Games</span></a></h1>
                <blockquote>
                    <p>API untuk berbagi data-data terkait informasi seputar game mulai dari judul, tahun tertib, gender dan prodesurnya agar teman-teman mengetahui Game-game yang sedang populer. <br> Dengan begitu kalian-kalian dapat mengetahui
                        perkembangan game-game yang sedang langi trend-trendnya buka?
                    </p>
                </blockquote>

                <h2 id="url"><a href="#endpoint" data-id="endpoint" class="anchor"><span>URL</span></a>
                </h2>
                <p><a href="" target="_blank" rel="noopener">http://localhost/API_Games/API_Games_Main/API/</a></p>

                <h2 id="GAD"><a href="#search" data-id="GAD" class="anchor"><span>Get All Data</span></a>
                </h2>
                <h3>Request</h3>
                <ul class="nav-tabs-document">
                    <li class="active">
                        <a href="#getAlldata-url">URL</a>
                    </li>
                    <li class="active">
                        <a href="#getAlldata-parameter">Parameter</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="getAlldata-url">
                        <table class="tabel-border-table-strip" border="1" style="margin-bottom : 10px">
                            <thead>
                                <tr>
                                    <td>Method</td>
                                    <td>Url</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GET</td>
                                    <td>http://localhost/Api_Games/API_Games_Main/API/getAllData.php</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="getAlldata-parameter">
                        <table class="tabel-border-table-strip" border="1">
                            <thead>
                                <tr>
                                    <td>Method</td>
                                    <td>Parameter</td>
                                    <td>Wajib</td>
                                    <td>Tipe</td>
                                    <td>Keterangan</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GET/HEAD</td>
                                    <td>Key</td>
                                    <td>Yes</td>
                                    <td>String</td>
                                    <td>API Key</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h3>Respond</h3>
                <ul class="nav-tabs-document">
                    <li class="active">
                        <a href="#getAlldata-respond-sukses">Response Sukses</a>
                    </li>
                    <li class="active">
                        <a href="#getAlldata-respond-gagal">Response Gagal</a>
                    </li>
                    <li class="active">
                        <a href="#getAlldata-invalid-Token">Key/Token Invalid</a>
                    </li>
                </ul>

                <div class="docs-code-block" id="getAlldata-respond-sukses">
					<!-- * Embed github code starts * -->
					<script src="https://gist.github.com/Fasya41/3223385512472ee1dc08b4a67975ee7d.js"></script>
					<!-- * Embed github code ends * -->
				</div><br><!--//docs-code-block-->

                <div class="docs-code-block" id="getAlldata-respond-gagal">
					<!-- * Embed github code starts * -->
					<script src="https://gist.github.com/Fasya41/8ee0f35543745d1942de65c630ed6d8f.js"></script>
					<!-- * Embed github code ends * -->
				</div><!--//docs-code-block-->
                
                <br>

                <div class="docs-code-block" id="getAlldata-invalid-Token">
					<!-- * Embed github code starts * -->
					<script src="https://gist.github.com/Fasya41/1ea62b13dbdd4d138bca4657a3465fbb.js"></script>
					<!-- * Embed github code ends * -->
				</div><!--//docs-code-block-->

                
                <h2 id="SBG"><a href="#search" data-id="SBG" class="anchor"><span>Search by Gendre</span></a>
                </h2>
                <h3>Request</h3>
                <ul class="nav-tabs-document">
                    <li class="active">
                        <a href="#searchBygendre-url">URL</a>
                    </li>
                    <li class="active">
                        <a href="#searchBygendre-parameter">Parameter</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="searchBygendre-url">
                        <table class="tabel-border-table-strip" border="1" style="margin-bottom : 10px">
                            <thead>
                                <tr>
                                    <td>Method</td>
                                    <td>Url</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GET</td>
                                    <td>http://localhost/Api_Games/API_Games_Main/API/searchbygendre.php</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="searchBygendre-parameter">
                        <table class="tabel-border-table-strip" border="1">
                            <thead>
                                <tr>
                                    <td>Method</td>
                                    <td>Parameter</td>
                                    <td>Wajib</td>
                                    <td>Tipe</td>
                                    <td>Keterangan</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GET/HEAD</td>
                                    <td>Key</td>
                                    <td>Yes</td>
                                    <td>String</td>
                                    <td>API Key</td>
                                </tr>
                                <tr>
                                    <td>GET</td>
                                    <td>year</td>
                                    <td>Yes</td>
                                    <td>String</td>
                                    <td>Jenis gendre game</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h3>Respond</h3>
                <ul class="nav-tabs-document">
                    <li class="active">
                        <a href="#searchBygendre-respond-sukses">Response Sukses</a>
                    </li>
                    <li class="active">
                        <a href="#searchBygendre-respond-gagal">Response Gagal</a>
                    </li>
                    <li class="active">
                        <a href="#searchBygendre-invalid-Token">Key/Token Invalid</a>
                    </li>
                </ul>

                <div class="docs-code-block" id="searchBygendre-respond-sukses">
					<!-- * Embed github code starts * -->
					<script src="https://gist.github.com/Fasya41/64f3b77e37fdd18d8c9cbfbab71b5b3f.js"></script>
					<!-- * Embed github code ends * -->
				</div><br><!--//docs-code-block-->

                <div class="docs-code-block" id="searchBygendre-respond-gagal">
					<!-- * Embed github code starts * -->
					<script src="https://gist.github.com/Fasya41/198ff192ee6cc9aacdbec21097a5c28d.js"></script>
					<!-- * Embed github code ends * -->
				</div><!--//docs-code-block-->
                
                <br>

                <div class="docs-code-block" id="searchBygendre-invalid-Token">
					<!-- * Embed github code starts * -->
					<script src="https://gist.github.com/Fasya41/fadd9edfa6718566a07c241be5392287.js"></script>
					<!-- * Embed github code ends * -->
				</div><!--//docs-code-block-->

                <h2 id="SBY"><a href="#search" data-id="SBY" class="anchor"><span>Search by Year</span></a>
                </h2>
                <h3>Request</h3>
                <ul class="nav-tabs-document">
                    <li class="active">
                        <a href="#searchByyear-url">URL</a>
                        
                    </li>
                    <li class="active">
                        <a href="#searchByyear-parameter">Parameter</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane" id="searchByyear-url">
                        <table class="tabel-border-table-strip" border="1">
                            <thead>
                                <tr>
                                    <td>Method</td>
                                    <td>Url</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GET</td>
                                    <td>http://localhost/Api_Games/API_Games_Main/API/searchbyyear.php</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="searchByyear-parameter">
                        <table class="tabel-border-table-strip" border="1" style="margin-bottom : 10px">
                             <thead>
                                <tr>
                                    <td>Method</td>
                                    <td>Parameter</td>
                                    <td>Wajib</td>
                                    <td>Tipe</td>
                                    <td>Keterangan</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>GET/HEAD</td>
                                    <td>Key</td>
                                    <td>Yes</td>
                                    <td>String</td>
                                    <td>API Key</td>
                                </tr>
                                <tr>
                                    <td>GET</td>
                                    <td>year</td>
                                    <td>Yes</td>
                                    <td>String</td>
                                    <td>Tahun rilis game</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <h3>Respond</h3>
                <ul class="nav-tabs-document">
                    <li class="active">
                        <a href="#searchByyear-respond-sukses">Response Sukses</a>
                    </li>
                    <li class="active">
                        <a href="#searchByyear-respond-gagal">Response Gagal</a>
                    </li>
                    <li class="active">
                        <a href="#searchByyear-invalid-Token">Key/Token Invalid</a>
                    </li>
                </ul>

                <div class="docs-code-block" id="searchByyear-respond-sukses">
					<!-- * Embed github code starts * -->
					<script src="https://gist.github.com/Fasya41/64e69127892deeb373a3e0716f2ce44f.js"></script>
					<!-- * Embed github code ends * -->
				</div><br><!--//docs-code-block-->

                <div class="docs-code-block" id="searchByyear-respond-gagal">
					<!-- * Embed github code starts * -->
					<script src="https://gist.github.com/Fasya41/75276e906d586a52be9f558450762696.js"></script>
					<!-- * Embed github code ends * -->
				</div><!--//docs-code-block-->
                
                <br>

                <div class="docs-code-block" id="searchByyear-invalid-Token">
					<!-- * Embed github code starts * -->
					<script src="https://gist.github.com/Fasya41/7f6668ee5366550d933eda58860c15be.js"></script>
					<!-- * Embed github code ends * -->
				</div><!--//docs-code-block-->

            </article>
        </section>
        <aside class="sidebar">
            <div class="sidebar-nav">
                <ul class="side">
                    <li class="active">
                        <a class="section-link" href="#token" , title="Games API">Key / Token</a>
                    </li>
                    <ul class="side">
                        <li class="list">
                            <a class="section-link" href="#your-token" , title="Endpoint">Your Token</a>
                        </li>
                    </ul>
                    <li class="active">
                        <a class="section-link" href="#documentation" , title="Pahlawan API">Documentation</a>
                    </li>
                    <ul class="side">
                        <li class="list">
                            <a class="section-link" href="#url" , title="Endpoint">URL</a>
                    </li>
                        <ul class="side">
                            <li class="list">
                                <a class="section-link" href="#GAD" , title="Search">Get All Data</a>
                            </li>
                            <li class="list">
                                <a class="section-link" href="#SBG" , title="Get One Data">Search By Gendre</a>
                            </li>
                            <li class="list">
                                <a class="section-link" href="#SBY" , title="Get All Data">Search By Year</a>
                            </li>
                        </ul>
                    </ul>
                </ul>

                <form action="index.php" class="home">
                    <div class="input_field">
                        <input type="submit" value="Go To Home" class="btn_home" name="submit">
                    </div>
                </form>

                <form action="logout.php" class="logout" method="POST">
                    <div class="input_field">
                        <input type="submit" value="Logout" class="btn" name="submit">
                    </div>
                </form>

            </div>
        </aside>
    </main>

</body>

</html>