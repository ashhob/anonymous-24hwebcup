
<?php
//Ouputs the header for the page and opening body tag
function outputHeader($title)
{
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';

    //Link to external style sheet
    
  $path = './CSS/footer.css';
  echo '<link href="' . $path . '" type="text/css" rel="stylesheet">
    </head>';
    echo '<body>
    <a id="top"></a>';
}


//Outputs closing body tag and closing HTML tag
function outputFooter() 
{
    //go back to the top button
    echo '<a id="myBtn" href=#top ><img style="float:right;" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAQ9JREFUSEvlleEVwUAQhGc6UAIVoAJSASpBBagAlUgHdIAKKEEH4613ySPJ5SKJX/bv3c7sfjcvIX5c/LE+/shAUgfA0SGNSD6q4K2MSNIOwNyJ7kkuWjOQNH6bPtG1LU4hk+AGDs0ZQDcjdgcwDKGqYhADmHgmjUnOyrYoNZA0BXAIYJiRtCEKy2vg0NwAWHrKytLU86EqM7AHHIUe0Z2fSEZFdwsNJFkEtxXFk2tLkhblj8oZSLK0WGpCaLJahspSZelKq8jgAqD/5fTJ9QvJoddA0hrAqqZ40rYhaTqvSjeQNHBoGuq/2g2VkfgwaIImO1SK6n2DNg2uJI3IP/1w6r588GtaVzgX06ZCvv4njFZOGRx3fOkAAAAASUVORK5CYII="></a>';
    echo '<script src="../js/common.js"></script>';
    echo '</body>';
    echo '<footer>
		<div class="footer">
		<div class="part1">
		<br>';
    //Array of pages to link to
    $linkNames1 = array("Our story", "Call us", 'Email us');
    $linkAddresses1 = array("aboutus.php", "tel:+23059249700", "mailto:onirixwebcup@gmail.com");

    //Output footer links
    for ($x = 0; $x < count($linkNames1); $x++) {
        echo '<a href="' . $linkAddresses1[$x] . '">' . $linkNames1[$x] . '</a>';
    }
    echo '</div>';
    $mail = "href=window.location.href='mailto:onirixwebcup@gmail.com'";
    echo '<div class="part2">
				<br>
				<form>
					<input type="text" placeholder="Any issues?" required> 
					<br>
					<br>
					<button onclick="' . $mail . '" type="submit">MESSAGE US</button>
				</form>
                <br>
                <div class="copyright">&copy; Onirix Inc All Rights Reserved.</div>
			</div>';

    echo '<div class="part3">
				<div class="socials">';
    //arrays of social media links and images to link to 
    $iconNames = array("insta", "mail",  "twitter");
    $iconAddresses = array("https://www.instagram.com/onirixwebcup/", "mailto:onirixwebcup@gmail.com", "https://twitter.com/OWebcup92159");
    $iconLinks = array(
        "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAZ5JREFUSEvNlb1NA0EQhb/XARGpTQVABYaEFFMAEnRAB4YKEBkZuAJwSARUYKgAiwb4aWDQQ7tofbbvzoFlRjqddDc7b37evBUrNq04PusBiIguMAB20lNX6Avg50qS31M2U0FEnAA3yesZ+EwB5oE4gQ2gl36eSrotHacAIsIHxoAD9yU5eKOliu+BbWC3rKQKYPQ+0G0TPCKOgQvgCzgC3oChJHfh16oAE2Aiaa+adkQY2BnaXiSNIuIAeADeJXUi4gnoSNpaBBBpWGfZISLc48c5w3awa+Ab2JQ0TAA9SX+JVyswwIWk8wLAzDCrTiS5z6Rq3M6xpP3C16DtAVKgO/c3By+CZbb9/Vu6gohwJYOy5ErrPsqK/yWAmbO6FqWBesidNORR+ub+XwKvJaXbtsiaUqWp2ZF3II9hZtvbADQtmqUkL9ovZUtLAFYB03ruJpvbh8BWG6moBHfQRqnIYueWWBldUaMlsTMZfH6x2BUDzHJtoDq5zpqV3/VyXSyRM/GgfdAMqjMrqRM5b3XhNPZjSYf13MlLJlnr/gN1YvoZXCUOOQAAAABJRU5ErkJggg==",
        "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAR1JREFUSEvtldFRwzAQRN9WAB0AHdABdEDoACogVEBSAaQCKAE6gA4oISWECo5Zj5xRjGzFGcLwkfuRx9btu9uTxmLPoT3rcwBUHV5bFBE3wDOwAmaSFtXsbEPKf0yv7iW9+DkHLIGTLOcVuJVkYG9ExDFgYRfYxlLSWRcQBRVDryV9lggRcZ669roRkpri8w5KgDZp2rUss8Qd/IixAAs0liUlz2oyZN0uAOvZMsfpkHhjzUiLano7WfQGXAJHFfUv4B24yvdt08EceEreX/RAPtIspsDDaICkmZMiwuuGADAf+r5VB61AgtgunyTHRJJtaaJUwGhAEmrOfPd2/xqgb9j/BuATc5dVuR5i7RIUOlhI8sk6/NFq5v2BRd87VowZDYN9IAAAAABJRU5ErkJggg==",
        "data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAAAXNSR0IArs4c6QAAAVpJREFUSEvdVcFRwzAQ3K0AOoAOIBUAFRAqACoAKoBUQEpIB5AKoAOgA1IBUMEyy0geS5YV7Bl/cjP+SHe7d6u7MzGxcWJ87BiBpH2S3zXZ7APgBsAcwDGATwArkgvHSZqTfI4YiUSS7GyH9z4SSa8ATgr3jjHhHcllh0CSL98AuIILkgZKrOXTx2+SDwDLmGRegVqRzmLRlszlA3iqSPgTFGiSywms3XkG4DN/lm8G4LFCsCbpJBprCMLjHQawg5Hz4YofagRfI4FjWPLAPix10djsjTfLOzAncCf5gfZGVLIhaYkT66yK0CmXYZCG8HTk6UgUJvEUwMsQZAAbD1lpCxSXnSR3wv0AkrPSYBYriKChbT1slqtm1yRXfQ59FVimuND6Yj21tzXwpAJJBnXGR/+QZh3APd1VK3XRFQCTuWUjmReYl+Df2iC5FTiy7tgfbZueY+4nl+gX3293GUCOwckAAAAASUVORK5CYII="
    );
    //output footer social media links
    for ($x = 0; $x < count($iconNames); $x++) {
        echo '<i class="' . $iconNames[$x] . '">';
        echo '<a href="' . $iconAddresses[$x] . '"target="_blank"><img src="' . $iconLinks[$x] . '"/></a>';
        echo '</i>';
    }

    echo '</div>
			</div>
		</div>
	</footer>
    </html>';
}

?>
