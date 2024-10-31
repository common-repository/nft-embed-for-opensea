<?php

	
	function web3_nft_login_opensea_embed_ui() {
		
		echo '<div style="margin:10px;padding:10px 40px;min-width:1050px" class="w3nft-card w3nft-postbox-container">
		
		<h3>Embed OpenSea NFT</h3>
		<b>Contract Address : </b> (NFT Collection Contract Address)
		<br><input type="text" id="contractaddress" placeholder="eg. 0xc143bbfcdbdbed6d454803804752a064a622c1f3" style="min-width:550px"><br><br>
		<b>TokenID : </b> (NFT Token ID)
		<br><input type="text" id="tokenid" placeholder="eg. 258" style="min-width:550px;"><br><br>
		<input type="button" value="Generate embed code" class="button button-primary button-large" id="generatecode" />
		<br/><br/>
		
		
		<div id="embededcode">
		
		</div>
		
		</div>
		
		<script>
			document.getElementById("generatecode").onclick = function(){
				document.getElementById("embededcode").innerHTML = \'<h3>Embed code <small>(Copy code below to embed NFT)</small></h3><hr><b>Shortcode</b><br><code>[opensea contractAddress="\' + document.getElementById("contractaddress").value + \'" tokenid="\' + document.getElementById("tokenid").value + \'"]</code><br><br><br><b>Shortcode (use in PHP code)</b><br><code>&lt;?php echo do_shortcode("[opensea contractAddress="\' + document.getElementById("contractaddress").value + \'" tokenid="\' + document.getElementById("tokenid").value + \'"]"); ?&gt;</code>\';
		
			}
		</script>
		
		';
			
			
		web3_nft_login_settings_preview();
	}
	
	
	function web3_nft_login_settings_preview(){
	
		
		echo "<div class='w3nft-card w3nft-postbox-container' style='margin:10px;padding:5px 20px;min-width:1050px'><h3>Sample Preview (Single NFT):</h3> 
		<nft-card contractAddress=\"0x648e8428e0104ec7d08667866a3568a72fe3898f\" tokenId=\"2539\"> </nft-card> <script src=\"https://unpkg.com/embeddable-nfts/dist/nft-card.min.js\"></script><br></div>";

	}
	
	
?>