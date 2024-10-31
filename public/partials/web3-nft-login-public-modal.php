<?php


	
	function web3_nft_login_opensea_embed($atts) {
		
		if(isset($atts['contractaddress']) && isset($atts['tokenid'])) {
			return '<nft-card contractAddress="'.$atts['contractaddress'].'" tokenId="'.$atts['tokenid'].'"> </nft-card> 
				<script src="https://unpkg.com/embeddable-nfts/dist/nft-card.min.js"></script>';
		}
		else 
			return "Invalid shortcode.";
	}
	
	