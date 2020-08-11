						<div class="row" id="network">
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0">
									<?php
									require 'util.php';
									$config = (require 'config.php');
									$info = fetch_getinfo($config['api']);
									echo "Height: ";
									print_r($info['height']);
									?>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1 ">
								<?php
									$info = fetch_getinfo($config['api']);
									$tx_pool_size = $info['tx_pool_size'];
									echo "<a>Unconfirmed Transactions: </a>";
									print_r($tx_pool_size);	
									?>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0 ">
								<?php
									$info = fetch_getinfo($config['api']);
									$tx_count = $info['tx_count'];
									echo "<a>Total Number of Transactions: </a>";
									print_r($tx_count);	
									?>
								</div>
								<div class="col-md-4 col-lg-4 col-xl-2">
								<?php
									$info = fetch_getinfo($config['api']);
									$supported_height = $info['supported_height'];
									echo "<a>Last Update: </a>";
									print_r($supported_height);	
									?>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0">
								<?php
									$info = fetch_getinfo($config['api']);
									$hashrate = $info['hashrate'];
									echo "<a>Hashrate: </a>";
									print_r($hashrate);	
									?>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-1">
								<?php
									$hashData = fetch_rpc($config['api'], 'getlastblockheader', '""');
									$hash = $hashData['result']['block_header']['hash'];
									$blockData = fetch_rpc($config['api'], 'f_block_json', '{"hash":"'.$hash.'"}');
									$supplyRaw = $blockData[result][block][alreadyGeneratedCoins];
									$supply = number_format($supplyRaw / $config['coinUnits'], 0, ".", "");
									echo "Circulating Supply: ";
									print_r($supply);
									?>
								</div>
								<div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-3 offset-0 offset-sm-0 offset-md-0 offset-lg-0 offset-xl-0">
								<?php
									$info = fetch_getinfo($config['api']);
									$white_peerlist_size = $info['white_peerlist_size'];
									echo "<a>Nodes: </a>";
									print_r($white_peerlist_size);	
									?>
								</div>								
								<div class="col-md-4 col-lg-4 col-xl-2">
								<?php
									$info = fetch_getinfo($config['api']);
									$version = $info['version'];
									echo "<a>Version Core: </a>";
									echo "v";
									print_r($version);	
									?>
								</div>	
						</div>