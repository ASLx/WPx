
<?php
if ( !headers_sent() ) header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!doctype html>
<!--[if lte IE 8 ]><html class="ie ie8 lte8 lte9 oldie" lang="en"><![endif]-->
<!--[if IE 9 ]><html class="ie ie9 lte9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#" class="not-ie"><!--<![endif]-->
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

    <title>Welcome to WPx Installation</title>

<!-- CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
.jumbotron { text-align: center; }
h2 { margin-bottom: 1em; }
.btn-install { font-size: 1em; margin: 1em; min-width: 300px; }
.fail { color: #d9534f; }
</style>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-1.12.3.min.js" integrity="sha256-aaODHAgvwQW1bFOGXMeX+pC4PZIPsvn2h1sArYOhgXQ=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->

<link rel="icon" type="image/png" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAABXFBMVEUejr4djr4cjb4rlMIkkcAqlMI3m8Udjb4zmcR3u9hhsNIqlMGk0eXP5/FIo8objb15vNiRyN+Px99hsNGj0eT8/v7////S6PI0mcR5vNmQyN+Ox9/U6fNLpMt6vNnV6vMcjb0vl8NAn8hwt9ZjsdIlkcAslcKn0+b9/v7C4O3B4O05nMYjkcArlcJvt9aQx9+Oxt9stdWq1Oa/3+1tttWWyuH+/v+83uzT6fM3msWXy+HW6vP+//8pk8F2utjW6/O+3uw2msUtlcKv1+jf7/YulsOs1efe7vabzeNmstMmksDd7vWbzeLc7fWazeIwl8Ou1uj9/v+73etns9MnksGw1+i53Osnk8EplMExl8Ox2Oi43Otos9RGosq12upqtNSAv9symMRarNDh8Pe02ukok8GBwNs8ncdZrM/g8PaAwNtXqs5/v9o6nMZWqs7e7vW22up+v9pFockxmMTdurcKAAAAAWJLR0QWfNGoGQAAAAlwSFlzAAALEgAACxIB0t1+/AAAAAd0SU1FB+AECQ4PMPnHWQEAAAGjSURBVEjH5dLnX4JAGMBxwHGWlUlFClbXsmElVjZsl2V7l+0yK22v///zCUjguDvQ9/JSvz89nucYptoflv4pZ+tdbkrCebw2BfDV1JIF56+rbwjQfWOQb8ILzt/cIrTSChAKizwvYYXmBSHSFiB9u+LxouQFoQMvdG8tDK8W0DKfTt2jBecyvFJ0oQXr6jYCnu/p1QoY7es3vDDgBZYjRYnC6gdjEHsJvMA9OSZrMTRcxqvFSNwI5MQo4sdi9FV7xvVCSkYmTD/phQzjWEjJKdRP23ijqNiXCikVqdRrBZ+ama3YK8Xc/ALiF5fKeAYur5hcSM+72TJ+dQ05f2Zd3thkK/db2zLPOxZWv7Mrq0txKKjeocDOo3u1AFS/t39g+sOwZN7do2NA8yfI/E9D2UTcscA9BGeOBeGVnTsV4PwC8Zch7T5Yi6ssOit4nTb9jQ/q9+rWKMS7nPUv7vO6f8gZ9w086oX4VMCWAYt5wpuF4skxFZ8JrxfiS4G2iNcM4f+L4Ns7ddWBj88v3GvFN90r3/2QXi1+7a8r9ZdYwFT78wf2dG0McNqQ2AAAABZ0RVh0Q3JlYXRpb24gVGltZQAwNC8wOS8xNmfiGI0AAAAldEVYdGRhdGU6Y3JlYXRlADIwMTYtMDQtMDlUMTQ6MTU6NDgrMDI6MDBbJhEBAAAAJXRFWHRkYXRlOm1vZGlmeQAyMDE2LTA0LTA5VDE0OjE1OjQ4KzAyOjAwKnupvQAAABx0RVh0U29mdHdhcmUAQWRvYmUgRmlyZXdvcmtzIENTNXG14zYAAABXelRYdFJhdyBwcm9maWxlIHR5cGUgaXB0YwAAeJzj8gwIcVYoKMpPy8xJ5VIAAyMLLmMLEyMTS5MUAxMgRIA0w2QDI7NUIMvY1MjEzMQcxAfLgEigSi4A6hcRdPJCNZUAAAAASUVORK5CYII=">
</head>

<body id="wpx-install" class="wpx-install body preloading no-js">

<script>
    document.body.className=document.body.className.replace(/no-js/,'js');(typeof FOXFRAME==='object')&&FOXFRAME.utils&&FOXFRAME.utils.addBodyClasses&&FOXFRAME.utils.addBodyClasses();
</script>

<div class="container">

<div class="jumbotron">
  <h1>Welcome to WPx Installation</h1>
  <h2>Environment check</h2>
    <div class="progress">
      <div class="progress-bar progress-bar-primary progress-bar-danger progress-bar-success progress-bar-striped active" role="progressbar" style="width: 45%">
        <span class="sr-only">45% Complete</span>
      </div>
    </div>
    <p class="check">Internet connection... <b class="label label-success">OK</b> <b class="label label-danger">FAILED</b></p>
    <p class="fail">Can't connect the repository. Check your internet connection and hit F5.</p>
    <p class="check">PHP version... <b class="label label-success">OK</b> <b class="label label-danger">FAILED</b></p>
    
    <p><a class="btn btn-success btn-lg btn-install" href="?install">Run installation</a></p>
</div>

</div>

</body>
</html>
