<!doctype html>
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>rndsht Password Generator</title>
	<meta name="description" content="rndsht Password Generator"> 

	<meta name="keywords" content="Password Generator, Online Password Generator, Random Password Generator, Secure Password Generator, Create Password, Generate Password">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">

	<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
	<link rel="manifest" href="site.webmanifest">
	<link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffc40d">
	<meta name="theme-color" content="#ffffff">
	<!--[if lte IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
</head>
	<body>
		<div class="container" style="margin-top: 2em;">
		    <div class="row">
    		    <div class="col-md-2">
    		        <img src="apple-touch-icon.png" />
                </div>
    		    <div class="col-md-10">
    		        <p>Since my favourite password generator closed down, I wrote my own. Simply generates 10 random 32 character (alphanumerice upper and lower case) passwords.</p>
    		        <p>Click on a password to copy to clipboard.</p>
    		        <p>In a case of stating the bloody obvious to the tin foil brigade:
    		            <ol>
    		                <li>I don't store the generated passwords... <strong>ANYWHERE</strong></li>
    		                <li>I don't IP addresses... <strong>ANYWHERE</strong></li>		                
    		                <li>Given 1 and 2, I don't associate IP addresses to passwords.</li>
    		                <li>I use this for generating passwords in work.</li>
    		            </ol>
    		        </p>
        		    <hr>
                		<?php
                		for( $x = 1; $x < 10; ++$x )
                		{
                			?>
                			<div class="input-group mb-3">
                				<input onclick="copyText(this.value);" style="width: 100%; text-align: center; border: 0; border-bottom: 1px solid #ededed; font-size: 18px; padding: .5em;" type="text" class="form-control" value="<?php echo generate_randompassword();?>">
                			</div>
                			<?php
                		}
                		?>
		        </div>
		    </div>
		</div>

		<script>
			function copyText(e) {
				console.log( e );
				var copyText = e;
				navigator.clipboard.writeText(copyText);
			}
		</script>

		<?php
		function generate_randompassword($passlength = 32)
		{
			$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
			$pass = array();
			$alphaLength = strlen( $alphabet ) - 1;
			for ( $i = 0; $i < $passlength; $i++ )
			{
				$n = rand( 0, $alphaLength );
				$pass[] = $alphabet[$n];
			}
			return implode( $pass );
		}
		?>
	</body> 
</html>
