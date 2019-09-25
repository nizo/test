<?php 
    
    if(isset($_GET['h'])) {
        $hersteller = $_GET['h'];
    }
    if(isset($_GET['m'])) {
        $modell = $_GET['m'];
    }
    if(isset($_GET['k'])) {
        $karosserie = $_GET['k'];
    }
    if(isset($_GET['ks'])) {
        $kraftstoff = $_GET['ks'];
    }
    if(isset($_GET['t'])) {
        $anzTueren = $_GET['t'];
    }
    if(isset($_GET['l'])) {
        $leistung = $_GET['l'];
    }
    if(isset($_GET['vm'])) {
        $vorgModell = $_GET['vm'];
    }
    if(isset($_GET['p'])) {
        $preis = $_GET['p'];
    }
    if(isset($_GET['pl'])) {
        $preisLeasing = $_GET['pl'];
    }
    if(isset($_GET['caller'])) {
        $caller = $_GET['caller'];
    }

?>
<!DOCTYPE html>
<html class="chrome"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
	<meta name="slack-app-id" content="A2VG0CJAE">

	<!--  <script src="./data/segment.min.js.Download" type="text/javascript"></script> -->


	<script>
	/**	var pdTranslatorConfig = {"assetsDomain":"pipedriveassets.com","cacheTag":"d8c2e72fa5_14","services":{"2019 q1":{"cacheSum":"aa8f8cb06f7cd8e35385a31867832714"},"2019 q3":{"cacheSum":"866080a789eaad2c5ed58908a69aa7c6"},"2fa":{"cacheSum":"d1c6ee3e2952dcaf82a1e838866bf1bf"},"academy-content":{"cacheSum":"cd4951c26c9c4d6be97e4174b98e1830"},"academy-public":{"cacheSum":"c3ee5e20f894d5d5f30aefabf93a332e"},"activities-calendar":{"cacheSum":"6b7a3187573f0b64b2c0fd1953779f6c"},"activities-components":{"cacheSum":"1a480667539471eab11635b5c502e46a"},"activities-notifications":{"cacheSum":"ce4b910d40c1eb287b8b0d734babca6c"},"apollo pretranslations":{"cacheSum":"a237474f21f1528c6cc0e913868ee40e"},"asana-integration":{"cacheSum":"c82a8a23a86c71849fc8af7d97a00d41"},"auth-login":{"cacheSum":"5f98d736640d9a690517f1e31d8137e9"},"auth-mailer":{"cacheSum":"9e14996191ff12b052c61f136a645ebf"},"automation-registry":{"cacheSum":"6bea94c686103fa1b42a47eda35b0859"},"automation-ui":{"cacheSum":"97f8db03e8dc0262af36dc66f6036103"},"billing-fe":{"cacheSum":"4ab35eff9a87d7de82610d415699df42"},"billing-form":{"cacheSum":"67570c1ee2d28ff5848db8c20a38b55a"},"calendar-sync-settings-page":{"cacheSum":"08c8804cc8babc7905dd82eda6e9e109"},"chrome-extension":{"cacheSum":"8c9f07ea649be9dc5b5b4eca7f14e476"},"click-to-unsubscribe":{"cacheSum":"8693fb976c57c29fd60eccd042b6b05c"},"cms":{"cacheSum":"220b575242c8096a763d6efdd35c6431"},"company-statistics-dashboard":{"cacheSum":"24edc73490eeaae47aa566cdd1b65a2e"},"contact-sync-api":{"cacheSum":"07a70cdb065b05ec14f3b4628d0e1292"},"contact-sync-settings-page":{"cacheSum":"e1720a4575a46e247f9b4a608ae68b02"},"contacts-timeline-service":{"cacheSum":"67be5af4ffbc47eb66a0cc5b337b9a30"},"data-police":{"cacheSum":"bf1c0e5203be9805797b1b722dd4df04"},"developers_corner":{"cacheSum":"095e20d35f50ce66e2643acc63743df7"},"email-components":{"cacheSum":"4d10e2c67588c1cb1692bce3c766a420"},"email-templates-rn":{"cacheSum":"1147d35ffddade66e4ecef7f4bcc6199"},"export-service":{"cacheSum":"34151fdd5011d44076ad250c2993694e"},"filters-menu":{"cacheSum":"cb5b014bd25792c1d4ab48bec02ab2d8"},"finding-duplicates-mass-merge":{"cacheSum":"2adfb71335e92228fa02ec6752b166d9"},"form-fields":{"cacheSum":"b0d12c1162e4978064c0de06705880e3"},"global-messages":{"cacheSum":"404e1877df437344c44b8beb60a8f9ce"},"iam-client":{"cacheSum":"6e2002cd09c35ca24459315f080d1f2a"},"import-service":{"cacheSum":"2f3823e2105626441cc615ce75f4b5b3"},"import-service-core":{"cacheSum":"0968b735bd670136238e3330ee7e1bed"},"import-service-frontend":{"cacheSum":"ee3bef9a1e6852a5f27a1f7f87fdcaa7"},"infographics-project":{"cacheSum":"2163093f0a78e5f68542ecb7da8ebf9a"},"insights":{"cacheSum":"671baf2ede1edc295abb90db46bcb5b1"},"insights-settings-api":{"cacheSum":"bd472e5be1e25d8895e0f08278dfe36a"},"invoice-settings-page":{"cacheSum":"e46dcb0919d3382dbbd5869df72f14b3"},"invoice-ui":{"cacheSum":"3a246a35aa502a359883516bdefd129b"},"labels-management":{"cacheSum":"a0aa385e00d3ef1ae30c1ed01bb6ff76"},"leadbooster-chat":{"cacheSum":"1e2e6047353c7ee14ea3ce11fec23c12"},"leadbox":{"cacheSum":"db5dc4ed1668c9d87f1f67943c86a7f4"},"leadfeeder-in-leadbox":{"cacheSum":"38e3f7f1d4b302bf03a0c3edd08f811f"},"manager-app":{"cacheSum":"c5af78430b549cae0e65250a3f13795a"},"marketplace":{"cacheSum":"cb1b9257d451b297d56be9a9843ffdf5"},"marketplace-app-extensions-ui":{"cacheSum":"bf6f4e130227fef0a85ee931dd05d458"},"messages":{"cacheSum":"d83bff503b2842aacfde42a8a0801886"},"nylas-calendar-sync-api":{"cacheSum":"20b888c8389bd0246b367ae1aa0b2833"},"oauth-server":{"cacheSum":"efae1d2e1d079571e4cc7fbd8fbb7af3"},"office365":{"cacheSum":"44b13be3acd592f5858e61c50776fa46"},"partners-portal":{"cacheSum":"e7e29aebc880e91d816fee25783b5552"},"permissions-settings-page":{"cacheSum":"2a4480d710d90d6dfed3595c1ff32381"},"pipeline-view":{"cacheSum":"1c4c2a55e53cc8084a84469527ab089f"},"proactive":{"cacheSum":"e55799c4bdd6ca180ac96c1df9fcfc7a"},"products-ui":{"cacheSum":"83eeaa6a25546ffde8473a3cdfed7921"},"prototype-service":{"cacheSum":"dbcafdcda6491ebbb0785ef7321d467c"},"quick-add-shortcuts":{"cacheSum":"a99fe3017757644562b66ea936773564"},"quick-info-card":{"cacheSum":"3a17df8caa288cd0d96f9e7210bad3a4"},"referral-service":{"cacheSum":"de52cac6c138b2e13ae380b92fe5a790"},"relationships-service":{"cacheSum":"3c9fe793f38c33cf48f3aba920642288"},"reports":{"cacheSum":"8084cbd0a3693defe95ac0f58f0974a7"},"resource-center":{"cacheSum":"6cd4cbd13935710d5f68bf1ebc918e9f"},"sales-phone":{"cacheSum":"d6b11f5682bafc2a298bab478551e3a6"},"scheduler-service":{"cacheSum":"8cd71f196c45b87cc9b7f6316c5366f8"},"security-audit":{"cacheSum":"f5ce9ba8dd58619885929670d13ea2ae"},"security-audit-log":{"cacheSum":"2fff26922df64cb43bfcfe7f8efcfb9c"},"security-center-ui":{"cacheSum":"43885c4f63a7f3dc21d1d1e9a66ea2ff"},"security-summary-mailer":{"cacheSum":"4a5260d4f0457125df69889400aee93a"},"session-device-tracker":{"cacheSum":"426b22d9b679034856a229231b59aa0f"},"settings-page":{"cacheSum":"1f06e1038a3ec6884ac2233ab07da5da"},"signup-service":{"cacheSum":"9187e525b9a208ceac1284b00a2d0393"},"signup-service-rn":{"cacheSum":"ce909f85c642707daa72c4173fea7430"},"slack-app":{"cacheSum":"2484fe5afee1c9ffff2ff3b53cc3230c"},"sso-service":{"cacheSum":"dc72ad56dbb3af1b4ad05e72ccdecb97"},"statistics-goals":{"cacheSum":"d84e43fd823a1da304619d22eb4b04f4"},"superdata-assets":{"cacheSum":"8443c27fc762a37366dfb89c23641edf"},"teams":{"cacheSum":"49739242a4f7581acd5ad48ebba66cac"},"third-party-auth-view":{"cacheSum":"3cdb3949fa22246d837ac434ea84e681"},"upgrade-button":{"cacheSum":"a048e55e9763bd38e4ef6b75f1004b50"},"user-prefs-settings-page":{"cacheSum":"8144b4ea07cfb47403844e434ef9c642"},"visibility-groups":{"cacheSum":"18cfdf89a6d72ebbcaf373b41cf0ceac"},"web-forms":{"cacheSum":"03499734d9799c83bd5af5c2cb68f410"},"web-forms-sync":{"cacheSum":"b228e0449653b81013e2a11cf70878a3"},"web-hooks":{"cacheSum":"1b377167e059d3b0eca6011b429e3903"},"webapp":{"cacheSum":"7f19ab925e524f446a265fe3460097a8"},"wordpress-plugin":{"cacheSum":"c8232367ed164cfb3e10da4e5168136d"},"www-static":{"cacheSum":"c4d89bd1840c8760240bb4174c953a27"}}};

		var app = app || {};

		app.ENV = 'live';

		app.supportedBrowser = true;

		app.config = {
			region: 'eu-central-1',


			intercom: {
				id: 'hqausqan'
			},

			sesheta: {
				id: 'fd101d4e29',
				key: '1XLkb+WXWgkPlHhAQfDnSA/m8Ab8hZghCwJyIjilCgw='
			},
			segmentKey: 'rFoCaYevXQ6nkopCZe30LtWOCQc2a8B8',

			appDomain: 'app',
			baseDomain: 'pipedrive.com',
			cookieDomain: '.pipedrive.com',
			cdnDomain: 'pipedriveassets.com',

			teamsService: 'https://teams-frontend.pipedriveassets.com',
			
			static: document.location.protocol + '//cdn.pipedriveassets.com/webapp',

			api: document.location.protocol + '//' + (document.location.hostname == 'app.pipedrive.com' ? 'api.pipedrive.com/v1' : document.location.hostname + '/api/v1'),

			socket: document.location.protocol + '//channel.pipedrive.com/sockjs',

			version: 'ac89e69d5a9a49e1e161',
			build: 'b703e86988_501',

			login: document.location.protocol + '//' + document.location.hostname + '/auth/login?return_url=' + encodeURIComponent(location.href),
			logout: document.location.protocol + '//' + document.location.hostname + '/auth/logout'
		}; **/
	</script>

	<style type="text/css">
		html,body { background: #eee; }
	</style>

		<link rel="stylesheet" type="text/css" media="all" href="./data/fonts.css">
		<link rel="stylesheet" type="text/css" media="all" href="./data/cui.css">
		<link rel="stylesheet" type="text/css" media="all" href="./data/cui4.css">
		<link rel="stylesheet" type="text/css" media="all" href="./data/app.css">

	<script src="./data/index.js.Download"></script>

	<meta name="apple-mobile-web-app-capable" content="yes">

	<meta name="viewport" content="width=1000, initial-scale=1">
	<meta name="MobileOptimized" content="1000">
	<meta name="format-detection" content="telephone=no">
	<meta name="HandheldFriendly" content="True">

	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="google-site-verification" content="hlF-Gd8bwffNOg8r0KxdTxPGI0GzGf1wWEzHrOfu4vA">
	<meta name="google" content="notranslate">

		<title>Max Müller - Kontaktdetails</title>
		<link rel="shortcut icon" href="">

<script>(window.BOOMR_mq=window.BOOMR_mq||[]).push(["addVar",{"rua.upush":"false","rua.cpush":"false","rua.upre":"false","rua.cpre":"false","rua.uprl":"false","rua.cprl":"false","rua.cprf":"false","rua.trans":"","rua.cook":"false","rua.ims":"false","rua.ufprl":"false","rua.cfprl":"false"}]);</script>
<script>!function(){function o(n,i){if(n&&i)for(var r in i)i.hasOwnProperty(r)&&(void 0===n[r]?n[r]=i[r]:n[r].constructor===Object&&i[r].constructor===Object?o(n[r],i[r]):n[r]=i[r])}try{var n=decodeURIComponent("");if(n.length>0&&window.JSON&&"function"==typeof window.JSON.parse){var i=JSON.parse(n);void 0!==window.BOOMR_config?o(window.BOOMR_config,i):window.BOOMR_config=i}}catch(r){window.console&&"function"==typeof window.console.error&&console.error("mPulse: Could not parse configuration",r)}}();</script>
<style type="text/css">.ComponentState_wrapperEdit__2hfKz{
	position:relative;
	display:flex;
	align-items:center;
	width:100%;
	justify-content:space-between;
}

	.ComponentState_wrapperEdit__2hfKz .ComponentState_edit__30nim{
		visibility:hidden;
	}

	.ComponentState_wrapperEdit__2hfKz .ComponentState_cuiText__2C2IR{
		width:100%;
	}

	.ComponentState_wrapperEdit__2hfKz .ComponentState_addValue__1BGE2{
		visibility:hidden;
		width:100%;
		display:inline-block;
	}

	.ComponentState_wrapperEdit__2hfKz .ComponentState_showValue__W4LLI{
		word-break:break-word;
	}

	.ComponentState_wrapperEdit__2hfKz:hover .ComponentState_edit__30nim{
			visibility:visible;
		}

	.ComponentState_wrapperEdit__2hfKz:hover .ComponentState_icon__e8AKC{
			visibility:hidden;
		}

	.ComponentState_wrapperAdd__1hg04{
	display:flex;
	align-items:baseline;
}

	.ComponentState_wrapperAdd__1hg04 .ComponentState_addValue__1BGE2{
		visibility:hidden;
	}

	.ComponentState_wrapperAdd__1hg04 .ComponentState_placeholder__5aGN7{
		position:absolute;
		color:#b9babb;
	}

	.ComponentState_wrapperAdd__1hg04:hover .ComponentState_addValue__1BGE2{
			visibility:visible;
		}

	.ComponentState_wrapperAdd__1hg04:hover .ComponentState_placeholder__5aGN7{
			visibility:hidden;
		}

	.ComponentState_wrapperAdd__1hg04:hover .ComponentState_showValue__W4LLI{
			display:none;
		}
</style><style type="text/css">.Wrapper-footer_footerWrapper__1b-pB{
	margin-top:8px;
	align-self:flex-end;
}

	.Wrapper-footer_footerWrapper__1b-pB .Wrapper-footer_saveButton__3BA9J{
		margin-left:4px;
	}
</style><style type="text/css">.Wrapper_wrapper__3sh0l .cui4-input--red .cui4-input__message{
				position:absolute;
			}
</style><style type="text/css">.InputSelect_wrapper__3AsAw{
	display:flex;
	position:relative;
}

.InputSelect_input__2jqyS{
	width:100%;
}

.InputSelect_input__2jqyS .cui4-input{
		flex:1;
	}

.InputSelect_popoverRoot__9MXgZ{
	height:0;
	width:100%;
}

.InputSelect_content__1mHSM{
	position:absolute;
	right:0;
	display:flex;
	align-items:center;
	height:100%;
	padding:0 10px;
	text-transform:uppercase;
}

.InputSelect_autosuggest__-b94t{
	overflow-y:scroll;
	max-height:70vh;
}
</style><style type="text/css">.Address_map__7rvgn{
	width:800px;
	height:600px;
}
</style><style type="text/css">.react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle, .react-datepicker__year-read-view--down-arrow, .react-datepicker__month-read-view--down-arrow, .react-datepicker__month-year-read-view--down-arrow{
  margin-left:-8px;
  position:absolute;
}

.react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle, .react-datepicker__year-read-view--down-arrow, .react-datepicker__month-read-view--down-arrow, .react-datepicker__month-year-read-view--down-arrow, .react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle::before, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle::before, .react-datepicker__year-read-view--down-arrow::before, .react-datepicker__month-read-view--down-arrow::before, .react-datepicker__month-year-read-view--down-arrow::before{
  box-sizing:content-box;
  position:absolute;
  border:8px solid transparent;
  height:0;
  width:1px;
}

.react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle::before, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle::before, .react-datepicker__year-read-view--down-arrow::before, .react-datepicker__month-read-view--down-arrow::before, .react-datepicker__month-year-read-view--down-arrow::before{
  content:"";
  z-index:-1;
  border-width:8px;
  left:-8px;
  border-bottom-color:#aeaeae;
}

.react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle{
  top:0;
  margin-top:-8px;
}

.react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle, .react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle::before{
  border-top:none;
  border-bottom-color:#f0f0f0;
}

.react-datepicker-popper[data-placement^="bottom"] .react-datepicker__triangle::before{
  top:-1px;
  border-bottom-color:#aeaeae;
}

.react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle, .react-datepicker__year-read-view--down-arrow, .react-datepicker__month-read-view--down-arrow, .react-datepicker__month-year-read-view--down-arrow{
  bottom:0;
  margin-bottom:-8px;
}

.react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle, .react-datepicker__year-read-view--down-arrow, .react-datepicker__month-read-view--down-arrow, .react-datepicker__month-year-read-view--down-arrow, .react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle::before, .react-datepicker__year-read-view--down-arrow::before, .react-datepicker__month-read-view--down-arrow::before, .react-datepicker__month-year-read-view--down-arrow::before{
  border-bottom:none;
  border-top-color:#fff;
}

.react-datepicker-popper[data-placement^="top"] .react-datepicker__triangle::before, .react-datepicker__year-read-view--down-arrow::before, .react-datepicker__month-read-view--down-arrow::before, .react-datepicker__month-year-read-view--down-arrow::before{
  bottom:-1px;
  border-top-color:#aeaeae;
}

.react-datepicker-wrapper,.react-datepicker{
  display:inline-block;
}

.react-datepicker{
  font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size:0.8rem;
  background-color:#fff;
  color:#000;
  border:1px solid #aeaeae;
  border-radius:0.3rem;
  position:relative;
}

.react-datepicker--time-only .react-datepicker__triangle{
  left:35px;
}

.react-datepicker--time-only .react-datepicker__time-container{
  border-left:0;
}

.react-datepicker--time-only .react-datepicker__time,.react-datepicker--time-only .react-datepicker__time-box{
  border-radius:0.3rem;
}

.react-datepicker__triangle{
  position:absolute;
  left:50px;
}

.react-datepicker-popper{
  z-index:1;
}

.react-datepicker-popper[data-placement^="bottom"]{
  margin-top:10px;
}

.react-datepicker-popper[data-placement^="top"]{
  margin-bottom:10px;
}

.react-datepicker-popper[data-placement^="right"]{
  margin-left:8px;
}

.react-datepicker-popper[data-placement^="right"] .react-datepicker__triangle{
  left:auto;
  right:42px;
}

.react-datepicker-popper[data-placement^="left"]{
  margin-right:8px;
}

.react-datepicker-popper[data-placement^="left"] .react-datepicker__triangle{
  left:42px;
  right:auto;
}

.react-datepicker__header{
  text-align:center;
  background-color:#f0f0f0;
  border-bottom:1px solid #aeaeae;
  border-top-left-radius:0.3rem;
  border-top-right-radius:0.3rem;
  padding-top:8px;
  position:relative;
}

.react-datepicker__header--time{
  padding-bottom:8px;
  padding-left:5px;
  padding-right:5px;
}

.react-datepicker__year-dropdown-container--select,
.react-datepicker__month-dropdown-container--select,
.react-datepicker__month-year-dropdown-container--select,
.react-datepicker__year-dropdown-container--scroll,
.react-datepicker__month-dropdown-container--scroll,
.react-datepicker__month-year-dropdown-container--scroll{
  display:inline-block;
  margin:0 2px;
}

.react-datepicker__current-month,
.react-datepicker-time__header{
  margin-top:0;
  color:#000;
  font-weight:bold;
  font-size:0.944rem;
}

.react-datepicker-time__header{
  text-overflow:ellipsis;
  white-space:nowrap;
  overflow:hidden;
}

.react-datepicker__navigation{
  background:none;
  line-height:1.7rem;
  text-align:center;
  cursor:pointer;
  position:absolute;
  top:10px;
  width:0;
  padding:0;
  border:0.45rem solid transparent;
  z-index:1;
  height:10px;
  width:10px;
  text-indent:-999em;
  overflow:hidden;
}

.react-datepicker__navigation--previous{
  left:10px;
  border-right-color:#ccc;
}

.react-datepicker__navigation--previous:hover{
  border-right-color:#b3b3b3;
}

.react-datepicker__navigation--previous--disabled, .react-datepicker__navigation--previous--disabled:hover{
  border-right-color:#e6e6e6;
  cursor:default;
}

.react-datepicker__navigation--next{
  right:10px;
  border-left-color:#ccc;
}

.react-datepicker__navigation--next--with-time:not(.react-datepicker__navigation--next--with-today-button){
  right:80px;
}

.react-datepicker__navigation--next:hover{
  border-left-color:#b3b3b3;
}

.react-datepicker__navigation--next--disabled, .react-datepicker__navigation--next--disabled:hover{
  border-left-color:#e6e6e6;
  cursor:default;
}

.react-datepicker__navigation--years{
  position:relative;
  top:0;
  display:block;
  margin-left:auto;
  margin-right:auto;
}

.react-datepicker__navigation--years-previous{
  top:4px;
  border-top-color:#ccc;
}

.react-datepicker__navigation--years-previous:hover{
  border-top-color:#b3b3b3;
}

.react-datepicker__navigation--years-upcoming{
  top:-4px;
  border-bottom-color:#ccc;
}

.react-datepicker__navigation--years-upcoming:hover{
  border-bottom-color:#b3b3b3;
}

.react-datepicker__month-container{
  float:left;
}

.react-datepicker__month{
  margin:0.4rem;
  text-align:center;
}

.react-datepicker__time-container{
  float:right;
  border-left:1px solid #aeaeae;
  width:70px;
}

.react-datepicker__time-container--with-today-button{
  display:inline;
  border:1px solid #aeaeae;
  border-radius:0.3rem;
  position:absolute;
  right:-72px;
  top:0;
}

.react-datepicker__time-container .react-datepicker__time{
  position:relative;
  background:white;
}

.react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box{
  width:70px;
  overflow-x:hidden;
  margin:0 auto;
  text-align:center;
}

.react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list{
  list-style:none;
  margin:0;
  height:calc(195px + 0.85rem);
  overflow-y:scroll;
  padding-right:0px;
  padding-left:0px;
  width:100%;
  box-sizing:content-box;
}

.react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item{
  height:30px;
  padding:5px 10px;
}

.react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item:hover{
  cursor:pointer;
  background-color:#f0f0f0;
}

.react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--selected{
  background-color:#216ba5;
  color:white;
  font-weight:bold;
}

.react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--selected:hover{
  background-color:#216ba5;
}

.react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--disabled{
  color:#ccc;
}

.react-datepicker__time-container .react-datepicker__time .react-datepicker__time-box ul.react-datepicker__time-list li.react-datepicker__time-list-item--disabled:hover{
  cursor:default;
  background-color:transparent;
}

.react-datepicker__week-number{
  color:#ccc;
  display:inline-block;
  width:1.7rem;
  line-height:1.7rem;
  text-align:center;
  margin:0.166rem;
}

.react-datepicker__week-number.react-datepicker__week-number--clickable{
  cursor:pointer;
}

.react-datepicker__week-number.react-datepicker__week-number--clickable:hover{
  border-radius:0.3rem;
  background-color:#f0f0f0;
}

.react-datepicker__day-names,
.react-datepicker__week{
  white-space:nowrap;
}

.react-datepicker__day-name,
.react-datepicker__day,
.react-datepicker__time-name{
  color:#000;
  display:inline-block;
  width:1.7rem;
  line-height:1.7rem;
  text-align:center;
  margin:0.166rem;
}

.react-datepicker__day{
  cursor:pointer;
}

.react-datepicker__day:hover{
  border-radius:0.3rem;
  background-color:#f0f0f0;
}

.react-datepicker__day--today{
  font-weight:bold;
}

.react-datepicker__day--highlighted{
  border-radius:0.3rem;
  background-color:#3dcc4a;
  color:#fff;
}

.react-datepicker__day--highlighted:hover{
  background-color:#32be3f;
}

.react-datepicker__day--highlighted-custom-1{
  color:magenta;
}

.react-datepicker__day--highlighted-custom-2{
  color:green;
}

.react-datepicker__day--selected, .react-datepicker__day--in-selecting-range, .react-datepicker__day--in-range{
  border-radius:0.3rem;
  background-color:#216ba5;
  color:#fff;
}

.react-datepicker__day--selected:hover, .react-datepicker__day--in-selecting-range:hover, .react-datepicker__day--in-range:hover{
  background-color:#1d5d90;
}

.react-datepicker__day--keyboard-selected{
  border-radius:0.3rem;
  background-color:#2a87d0;
  color:#fff;
}

.react-datepicker__day--keyboard-selected:hover{
  background-color:#1d5d90;
}

.react-datepicker__day--in-selecting-range:not(.react-datepicker__day--in-range){
  background-color:rgba(33, 107, 165, 0.5);
}

.react-datepicker-cssmodules_react-datepicker__month--selecting-range__Bpx6w .react-datepicker__day--in-range:not(.react-datepicker__day--in-selecting-range){
  background-color:#f0f0f0;
  color:#000;
}

.react-datepicker__day--disabled{
  cursor:default;
  color:#ccc;
}

.react-datepicker__day--disabled:hover{
  background-color:transparent;
}

.react-datepicker__input-container{
  position:relative;
  display:inline-block;
}

.react-datepicker__year-read-view,
.react-datepicker__month-read-view,
.react-datepicker__month-year-read-view{
  border:1px solid transparent;
  border-radius:0.3rem;
}

.react-datepicker__year-read-view:hover,
.react-datepicker__month-read-view:hover,
.react-datepicker__month-year-read-view:hover{
  cursor:pointer;
}

.react-datepicker__year-read-view:hover .react-datepicker__year-read-view--down-arrow,
.react-datepicker__year-read-view:hover .react-datepicker__month-read-view--down-arrow,
.react-datepicker__month-read-view:hover .react-datepicker__year-read-view--down-arrow,
.react-datepicker__month-read-view:hover .react-datepicker__month-read-view--down-arrow,
.react-datepicker__month-year-read-view:hover .react-datepicker__year-read-view--down-arrow,
.react-datepicker__month-year-read-view:hover .react-datepicker__month-read-view--down-arrow{
  border-top-color:#b3b3b3;
}

.react-datepicker__year-read-view--down-arrow,
.react-datepicker__month-read-view--down-arrow,
.react-datepicker__month-year-read-view--down-arrow{
  border-top-color:#ccc;
  float:right;
  margin-left:20px;
  top:8px;
  position:relative;
  border-width:0.45rem;
}

.react-datepicker__year-dropdown,
.react-datepicker__month-dropdown,
.react-datepicker__month-year-dropdown{
  background-color:#f0f0f0;
  position:absolute;
  width:50%;
  left:25%;
  top:30px;
  z-index:1;
  text-align:center;
  border-radius:0.3rem;
  border:1px solid #aeaeae;
}

.react-datepicker__year-dropdown:hover,
.react-datepicker__month-dropdown:hover,
.react-datepicker__month-year-dropdown:hover{
  cursor:pointer;
}

.react-datepicker__year-dropdown--scrollable,
.react-datepicker__month-dropdown--scrollable,
.react-datepicker__month-year-dropdown--scrollable{
  height:150px;
  overflow-y:scroll;
}

.react-datepicker__year-option,
.react-datepicker__month-option,
.react-datepicker__month-year-option{
  line-height:20px;
  width:100%;
  display:block;
  margin-left:auto;
  margin-right:auto;
}

.react-datepicker__year-option:first-of-type,
.react-datepicker__month-option:first-of-type,
.react-datepicker__month-year-option:first-of-type{
  border-top-left-radius:0.3rem;
  border-top-right-radius:0.3rem;
}

.react-datepicker__year-option:last-of-type,
.react-datepicker__month-option:last-of-type,
.react-datepicker__month-year-option:last-of-type{
  -webkit-user-select:none;
  -moz-user-select:none;
  -ms-user-select:none;
  user-select:none;
  border-bottom-left-radius:0.3rem;
  border-bottom-right-radius:0.3rem;
}

.react-datepicker__year-option:hover,
.react-datepicker__month-option:hover,
.react-datepicker__month-year-option:hover{
  background-color:#ccc;
}

.react-datepicker__year-option:hover .react-datepicker__navigation--years-upcoming,
.react-datepicker__month-option:hover .react-datepicker__navigation--years-upcoming,
.react-datepicker__month-year-option:hover .react-datepicker__navigation--years-upcoming{
  border-bottom-color:#b3b3b3;
}

.react-datepicker__year-option:hover .react-datepicker__navigation--years-previous,
.react-datepicker__month-option:hover .react-datepicker__navigation--years-previous,
.react-datepicker__month-year-option:hover .react-datepicker__navigation--years-previous{
  border-top-color:#b3b3b3;
}

.react-datepicker__year-option--selected,
.react-datepicker__month-option--selected,
.react-datepicker__month-year-option--selected{
  position:absolute;
  left:15px;
}

.react-datepicker__close-icon{
  background-color:transparent;
  border:0;
  cursor:pointer;
  outline:0;
  padding:0;
  vertical-align:middle;
  position:absolute;
  height:16px;
  width:16px;
  top:25%;
  right:7px;
}

.react-datepicker__close-icon::after{
  background-color:#216ba5;
  border-radius:50%;
  bottom:0;
  box-sizing:border-box;
  color:#fff;
  content:"\D7";
  cursor:pointer;
  font-size:12px;
  height:16px;
  width:16px;
  line-height:1;
  margin:-8px auto 0;
  padding:2px;
  position:absolute;
  right:0px;
  text-align:center;
}

.react-datepicker__today-button{
  background:#f0f0f0;
  border-top:1px solid #aeaeae;
  cursor:pointer;
  text-align:center;
  font-weight:bold;
  padding:5px 0;
  clear:left;
}

.react-datepicker__portal{
  position:fixed;
  width:100vw;
  height:100vh;
  background-color:rgba(0, 0, 0, 0.8);
  left:0;
  top:0;
  justify-content:center;
  align-items:center;
  display:flex;
  z-index:2147483647;
}

.react-datepicker__portal .react-datepicker__day-name,
.react-datepicker__portal .react-datepicker__day,
.react-datepicker__portal .react-datepicker__time-name{
  width:3rem;
  line-height:3rem;
}

@media (max-width: 400px), (max-height: 550px){
  .react-datepicker__portal .react-datepicker__day-name,
  .react-datepicker__portal .react-datepicker__day,
  .react-datepicker__portal .react-datepicker__time-name{
    width:2rem;
    line-height:2rem;
  }
}

.react-datepicker__portal .react-datepicker__current-month,
.react-datepicker__portal .react-datepicker-time__header{
  font-size:1.44rem;
}

.react-datepicker__portal .react-datepicker__navigation{
  border:0.81rem solid transparent;
}

.react-datepicker__portal .react-datepicker__navigation--previous{
  border-right-color:#ccc;
}

.react-datepicker__portal .react-datepicker__navigation--previous:hover{
  border-right-color:#b3b3b3;
}

.react-datepicker__portal .react-datepicker__navigation--previous--disabled, .react-datepicker__portal .react-datepicker__navigation--previous--disabled:hover{
  border-right-color:#e6e6e6;
  cursor:default;
}

.react-datepicker__portal .react-datepicker__navigation--next{
  border-left-color:#ccc;
}

.react-datepicker__portal .react-datepicker__navigation--next:hover{
  border-left-color:#b3b3b3;
}

.react-datepicker__portal .react-datepicker__navigation--next--disabled, .react-datepicker__portal .react-datepicker__navigation--next--disabled:hover{
  border-left-color:#e6e6e6;
  cursor:default;
}
</style><style type="text/css">.DatePicker-header_wrapper__1mAu3{
	display:flex;
	justify-content:space-between;
}
.DatePicker-header_month__11bAc,
.DatePicker-header_year__3pbDX{
	color:#317ae2;
	font-weight:600;
	font-size:14px;
	-webkit-appearance:none;
	   -moz-appearance:none;
	        appearance:none;
	border:0;
	background-color:#fff;
	outline:none;
	cursor:pointer;
}
.DatePicker-header_month__11bAc{
	text-align-last:center;
}
.DatePicker-header_prev__3jODG{
	margin-left:8px;
}
.DatePicker-header_next__2TSpj{
	margin-right:8px;
}
</style><style type="text/css">.react-datepicker-popper[data-placement^='bottom']{
			margin-top:0;
		}
		.react-datepicker-popper[data-placement]{
			z-index:6001;
		}
		.react-datepicker--time-only{
			border:0 !important;
		}
		.react-datepicker-wrapper,.react-datepicker__input-container{
			width:100%;
		}
		.DatePicker_wrapper__2Twem{
	display:block;
}
		.DatePicker_calendar__1MVnh .react-datepicker__header{
				height:69px;
				background-color:#fff;
				border:0;
			}
		.DatePicker_calendar__1MVnh .react-datepicker__header--time{
					display:none;
				}
		.DatePicker_calendar__1MVnh .react-datepicker__header--time-box{
						width:100px;
					}
		.DatePicker_calendar__1MVnh .react-datepicker__day{
				margin:2px;
			}
		.DatePicker_calendar__1MVnh .react-datepicker__day-names{
					margin-top:14px;
					border-bottom:1px solid #e5e5e5;
					border-top:1px solid #e5e5e5;
				}
		.DatePicker_calendar__1MVnh .react-datepicker__day-name{
					color:rgba(38,41,44,.64);
					font-size:10px;
					line-height:14px;
					font-weight:400;
					text-align:center;
					vertical-align:middle;
					padding:4px 0;
				}
		.DatePicker_calendar__1MVnh .react-datepicker__day--today{
					color:rgba(38,41,44,.64);
					background-color:#f7f7f7;
					font-weight:600;
					border-radius:3px;
				}
		.DatePicker_calendar__1MVnh .react-datepicker__day--outside-month{
					color:rgba(38,41,44,.32);
				}
		.DatePicker_calendar__1MVnh .react-datepicker__day--selected,
				.DatePicker_calendar__1MVnh .react-datepicker__day--keyboard-selected,
				.DatePicker_calendar__1MVnh .react-datepicker__day--in-range,.DatePicker_calendar__1MVnh .react-datepicker__day--selected:not(.react-datepicker--time-only--in-selecting-range), .DatePicker_calendar__1MVnh .react-datepicker__day--keyboard-selected:not(.react-datepicker--time-only--in-selecting-range), .DatePicker_calendar__1MVnh .react-datepicker__day--in-range:not(.react-datepicker--time-only--in-selecting-range),.DatePicker_calendar__1MVnh .react-datepicker__day--selected:hover, .DatePicker_calendar__1MVnh .react-datepicker__day--keyboard-selected:hover, .DatePicker_calendar__1MVnh .react-datepicker__day--in-range:hover{
						color:#fff;
						background-color:#317ae2;
					}
		.DatePicker_calendar__1MVnh .react-datepicker__day--in-selecting-range,.DatePicker_calendar__1MVnh .react-datepicker__day:hover{
					color:#317ae2;
					background-color:rgba(49,122,226,.32);
				}
		.DatePicker_calendar__1MVnh .react-datepicker__day--disabled,.DatePicker_calendar__1MVnh .react-datepicker__day--disabled:hover{
						background-color:transparent;
					}
		.DatePicker_calendar__1MVnh .react-datepicker__triangle{
				display:none;
			}
		.DatePicker_calendar__1MVnh .react-datepicker__time{
				width:100px !important;
				border-radius:0;
				border:1px solid #b9babb;
				box-shadow:0 5px 15px -5px #747678;
			}
		.DatePicker_calendar__1MVnh .react-datepicker__time-container{
					border:0;
				}
		.DatePicker_calendar__1MVnh .react-datepicker__time-box{
					border-radius:0;
					width:100px !important;
				}
		.DatePicker_calendar__1MVnh .react-datepicker__time-list-item{
					height:auto !important;
				}
		.DatePicker_calendar__1MVnh .react-datepicker__time-list-item:hover{
						background-color:#317ae2 !important;
						color:#fff;
					}
</style><style type="text/css">.react-datepicker_react-datepicker-popper__L5znY[data-placement^="bottom"] .react-datepicker_react-datepicker__triangle__3ugAz, .react-datepicker_react-datepicker-popper__L5znY[data-placement^="top"] .react-datepicker_react-datepicker__triangle__3ugAz, .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG,
.react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-,
.react-datepicker_react-datepicker__month-year-read-view--down-arrow__3ghtV{
  margin-left:-8px;
  position:absolute;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="bottom"] .react-datepicker_react-datepicker__triangle__3ugAz, .react-datepicker_react-datepicker-popper__L5znY[data-placement^="top"] .react-datepicker_react-datepicker__triangle__3ugAz, .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG,
.react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-,
.react-datepicker_react-datepicker__month-year-read-view--down-arrow__3ghtV, .react-datepicker_react-datepicker-popper__L5znY[data-placement^="bottom"] .react-datepicker_react-datepicker__triangle__3ugAz::before, .react-datepicker_react-datepicker-popper__L5znY[data-placement^="top"] .react-datepicker_react-datepicker__triangle__3ugAz::before, .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG::before,
.react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-::before,
.react-datepicker_react-datepicker__month-year-read-view--down-arrow__3ghtV::before{
  box-sizing:content-box;
  position:absolute;
  border:8px solid transparent;
  height:0;
  width:1px;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="bottom"] .react-datepicker_react-datepicker__triangle__3ugAz::before, .react-datepicker_react-datepicker-popper__L5znY[data-placement^="top"] .react-datepicker_react-datepicker__triangle__3ugAz::before, .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG::before,
.react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-::before,
.react-datepicker_react-datepicker__month-year-read-view--down-arrow__3ghtV::before{
  content:"";
  z-index:-1;
  border-width:8px;
  left:-8px;
  border-bottom-color:#aeaeae;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="bottom"] .react-datepicker_react-datepicker__triangle__3ugAz{
  top:0;
  margin-top:-8px;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="bottom"] .react-datepicker_react-datepicker__triangle__3ugAz, .react-datepicker_react-datepicker-popper__L5znY[data-placement^="bottom"] .react-datepicker_react-datepicker__triangle__3ugAz::before{
  border-top:none;
  border-bottom-color:#f0f0f0;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="bottom"] .react-datepicker_react-datepicker__triangle__3ugAz::before{
  top:-1px;
  border-bottom-color:#aeaeae;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="top"] .react-datepicker_react-datepicker__triangle__3ugAz, .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG,
.react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-,
.react-datepicker_react-datepicker__month-year-read-view--down-arrow__3ghtV{
  bottom:0;
  margin-bottom:-8px;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="top"] .react-datepicker_react-datepicker__triangle__3ugAz, .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG,
.react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-,
.react-datepicker_react-datepicker__month-year-read-view--down-arrow__3ghtV, .react-datepicker_react-datepicker-popper__L5znY[data-placement^="top"] .react-datepicker_react-datepicker__triangle__3ugAz::before, .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG::before,
.react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-::before,
.react-datepicker_react-datepicker__month-year-read-view--down-arrow__3ghtV::before{
  border-bottom:none;
  border-top-color:#fff;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="top"] .react-datepicker_react-datepicker__triangle__3ugAz::before, .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG::before,
.react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-::before,
.react-datepicker_react-datepicker__month-year-read-view--down-arrow__3ghtV::before{
  bottom:-1px;
  border-top-color:#aeaeae;
}

.react-datepicker_react-datepicker-wrapper__6Dhia,.react-datepicker_react-datepicker__2gZWf{
  display:inline-block;
}

.react-datepicker_react-datepicker__2gZWf{
  font-family:"Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size:0.8rem;
  background-color:#fff;
  color:#000;
  border:1px solid #aeaeae;
  border-radius:0.3rem;
  position:relative;
}

.react-datepicker_react-datepicker--time-only__2k3wR .react-datepicker_react-datepicker__triangle__3ugAz{
  left:35px;
}

.react-datepicker_react-datepicker--time-only__2k3wR .react-datepicker_react-datepicker__time-container__1I5ZB{
  border-left:0;
}

.react-datepicker_react-datepicker--time-only__2k3wR .react-datepicker_react-datepicker__time__3-Anq,.react-datepicker_react-datepicker--time-only__2k3wR .react-datepicker_react-datepicker__time-box__3LdBR{
  border-radius:0.3rem;
}

.react-datepicker_react-datepicker__triangle__3ugAz{
  position:absolute;
  left:50px;
}

.react-datepicker_react-datepicker-popper__L5znY{
  z-index:1;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="bottom"]{
  margin-top:10px;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="top"]{
  margin-bottom:10px;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="right"]{
  margin-left:8px;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="right"] .react-datepicker_react-datepicker__triangle__3ugAz{
  left:auto;
  right:42px;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="left"]{
  margin-right:8px;
}

.react-datepicker_react-datepicker-popper__L5znY[data-placement^="left"] .react-datepicker_react-datepicker__triangle__3ugAz{
  left:42px;
  right:auto;
}

.react-datepicker_react-datepicker__header__bvy5C{
  text-align:center;
  background-color:#f0f0f0;
  border-bottom:1px solid #aeaeae;
  border-top-left-radius:0.3rem;
  border-top-right-radius:0.3rem;
  padding-top:8px;
  position:relative;
}

.react-datepicker_react-datepicker__header--time__Y5ogf{
  padding-bottom:8px;
  padding-left:5px;
  padding-right:5px;
}

.react-datepicker_react-datepicker__year-dropdown-container--select__2-xKl,
.react-datepicker_react-datepicker__month-dropdown-container--select__oc8sw,
.react-datepicker_react-datepicker__month-year-dropdown-container--select__2wkO3,
.react-datepicker_react-datepicker__year-dropdown-container--scroll__3SvqU,
.react-datepicker_react-datepicker__month-dropdown-container--scroll__1c9uV,
.react-datepicker_react-datepicker__month-year-dropdown-container--scroll__1-RkS{
  display:inline-block;
  margin:0 2px;
}

.react-datepicker_react-datepicker__current-month__1ZB8-,
.react-datepicker_react-datepicker-time__header__3okAC{
  margin-top:0;
  color:#000;
  font-weight:bold;
  font-size:0.944rem;
}

.react-datepicker_react-datepicker-time__header__3okAC{
  text-overflow:ellipsis;
  white-space:nowrap;
  overflow:hidden;
}

.react-datepicker_react-datepicker__navigation__1_YJ1{
  background:none;
  line-height:1.7rem;
  text-align:center;
  cursor:pointer;
  position:absolute;
  top:10px;
  width:0;
  padding:0;
  border:0.45rem solid transparent;
  z-index:1;
  height:10px;
  width:10px;
  text-indent:-999em;
  overflow:hidden;
}

.react-datepicker_react-datepicker__navigation--previous__3fEwp{
  left:10px;
  border-right-color:#ccc;
}

.react-datepicker_react-datepicker__navigation--previous__3fEwp:hover{
  border-right-color:#b3b3b3;
}

.react-datepicker_react-datepicker__navigation--previous--disabled__1B0am, .react-datepicker_react-datepicker__navigation--previous--disabled__1B0am:hover{
  border-right-color:#e6e6e6;
  cursor:default;
}

.react-datepicker_react-datepicker__navigation--next__3f3h3{
  right:10px;
  border-left-color:#ccc;
}

.react-datepicker_react-datepicker__navigation--next--with-time__225Hc:not(.react-datepicker_react-datepicker__navigation--next--with-today-button__3CmXY){
  right:80px;
}

.react-datepicker_react-datepicker__navigation--next__3f3h3:hover{
  border-left-color:#b3b3b3;
}

.react-datepicker_react-datepicker__navigation--next--disabled__1dh1a, .react-datepicker_react-datepicker__navigation--next--disabled__1dh1a:hover{
  border-left-color:#e6e6e6;
  cursor:default;
}

.react-datepicker_react-datepicker__navigation--years__da6-P{
  position:relative;
  top:0;
  display:block;
  margin-left:auto;
  margin-right:auto;
}

.react-datepicker_react-datepicker__navigation--years-previous__mhsjF{
  top:4px;
  border-top-color:#ccc;
}

.react-datepicker_react-datepicker__navigation--years-previous__mhsjF:hover{
  border-top-color:#b3b3b3;
}

.react-datepicker_react-datepicker__navigation--years-upcoming__15Byw{
  top:-4px;
  border-bottom-color:#ccc;
}

.react-datepicker_react-datepicker__navigation--years-upcoming__15Byw:hover{
  border-bottom-color:#b3b3b3;
}

.react-datepicker_react-datepicker__month-container__1PVXx{
  float:left;
}

.react-datepicker_react-datepicker__month__3sG9Q{
  margin:0.4rem;
  text-align:center;
}

.react-datepicker_react-datepicker__time-container__1I5ZB{
  float:right;
  border-left:1px solid #aeaeae;
  width:70px;
}

.react-datepicker_react-datepicker__time-container--with-today-button__336qm{
  display:inline;
  border:1px solid #aeaeae;
  border-radius:0.3rem;
  position:absolute;
  right:-72px;
  top:0;
}

.react-datepicker_react-datepicker__time-container__1I5ZB .react-datepicker_react-datepicker__time__3-Anq{
  position:relative;
  background:white;
}

.react-datepicker_react-datepicker__time-container__1I5ZB .react-datepicker_react-datepicker__time__3-Anq .react-datepicker_react-datepicker__time-box__3LdBR{
  width:70px;
  overflow-x:hidden;
  margin:0 auto;
  text-align:center;
}

.react-datepicker_react-datepicker__time-container__1I5ZB .react-datepicker_react-datepicker__time__3-Anq .react-datepicker_react-datepicker__time-box__3LdBR ul.react-datepicker_react-datepicker__time-list__3RwFc{
  list-style:none;
  margin:0;
  height:calc(195px + 0.85rem);
  overflow-y:scroll;
  padding-right:0px;
  padding-left:0px;
  width:100%;
  box-sizing:content-box;
}

.react-datepicker_react-datepicker__time-container__1I5ZB .react-datepicker_react-datepicker__time__3-Anq .react-datepicker_react-datepicker__time-box__3LdBR ul.react-datepicker_react-datepicker__time-list__3RwFc li.react-datepicker_react-datepicker__time-list-item__2GFN3{
  height:30px;
  padding:5px 10px;
}

.react-datepicker_react-datepicker__time-container__1I5ZB .react-datepicker_react-datepicker__time__3-Anq .react-datepicker_react-datepicker__time-box__3LdBR ul.react-datepicker_react-datepicker__time-list__3RwFc li.react-datepicker_react-datepicker__time-list-item__2GFN3:hover{
  cursor:pointer;
  background-color:#f0f0f0;
}

.react-datepicker_react-datepicker__time-container__1I5ZB .react-datepicker_react-datepicker__time__3-Anq .react-datepicker_react-datepicker__time-box__3LdBR ul.react-datepicker_react-datepicker__time-list__3RwFc li.react-datepicker_react-datepicker__time-list-item--selected__1ysoQ{
  background-color:#216ba5;
  color:white;
  font-weight:bold;
}

.react-datepicker_react-datepicker__time-container__1I5ZB .react-datepicker_react-datepicker__time__3-Anq .react-datepicker_react-datepicker__time-box__3LdBR ul.react-datepicker_react-datepicker__time-list__3RwFc li.react-datepicker_react-datepicker__time-list-item--selected__1ysoQ:hover{
  background-color:#216ba5;
}

.react-datepicker_react-datepicker__time-container__1I5ZB .react-datepicker_react-datepicker__time__3-Anq .react-datepicker_react-datepicker__time-box__3LdBR ul.react-datepicker_react-datepicker__time-list__3RwFc li.react-datepicker_react-datepicker__time-list-item--disabled__3eoHI{
  color:#ccc;
}

.react-datepicker_react-datepicker__time-container__1I5ZB .react-datepicker_react-datepicker__time__3-Anq .react-datepicker_react-datepicker__time-box__3LdBR ul.react-datepicker_react-datepicker__time-list__3RwFc li.react-datepicker_react-datepicker__time-list-item--disabled__3eoHI:hover{
  cursor:default;
  background-color:transparent;
}

.react-datepicker_react-datepicker__week-number__3UCfu{
  color:#ccc;
  display:inline-block;
  width:1.7rem;
  line-height:1.7rem;
  text-align:center;
  margin:0.166rem;
}

.react-datepicker_react-datepicker__week-number__3UCfu.react-datepicker_react-datepicker__week-number--clickable__1a3AF{
  cursor:pointer;
}

.react-datepicker_react-datepicker__week-number__3UCfu.react-datepicker_react-datepicker__week-number--clickable__1a3AF:hover{
  border-radius:0.3rem;
  background-color:#f0f0f0;
}

.react-datepicker_react-datepicker__day-names__Sj-8b,
.react-datepicker_react-datepicker__week__1PHIc{
  white-space:nowrap;
}

.react-datepicker_react-datepicker__day-name__3emiw,
.react-datepicker_react-datepicker__day__2VFZN,
.react-datepicker_react-datepicker__time-name__2zQ5Q{
  color:#000;
  display:inline-block;
  width:1.7rem;
  line-height:1.7rem;
  text-align:center;
  margin:0.166rem;
}

.react-datepicker_react-datepicker__day__2VFZN{
  cursor:pointer;
}

.react-datepicker_react-datepicker__day__2VFZN:hover{
  border-radius:0.3rem;
  background-color:#f0f0f0;
}

.react-datepicker_react-datepicker__day--today__1BxJm{
  font-weight:bold;
}

.react-datepicker_react-datepicker__day--highlighted__18Vmq{
  border-radius:0.3rem;
  background-color:#3dcc4a;
  color:#fff;
}

.react-datepicker_react-datepicker__day--highlighted__18Vmq:hover{
  background-color:#32be3f;
}

.react-datepicker_react-datepicker__day--highlighted-custom-1__3IZkf{
  color:magenta;
}

.react-datepicker_react-datepicker__day--highlighted-custom-2__bs2Yp{
  color:green;
}

.react-datepicker_react-datepicker__day--selected__2eEsK, .react-datepicker_react-datepicker__day--in-selecting-range__1NYLR, .react-datepicker_react-datepicker__day--in-range__1Re2u{
  border-radius:0.3rem;
  background-color:#216ba5;
  color:#fff;
}

.react-datepicker_react-datepicker__day--selected__2eEsK:hover, .react-datepicker_react-datepicker__day--in-selecting-range__1NYLR:hover, .react-datepicker_react-datepicker__day--in-range__1Re2u:hover{
  background-color:#1d5d90;
}

.react-datepicker_react-datepicker__day--keyboard-selected__3YBDV{
  border-radius:0.3rem;
  background-color:#2a87d0;
  color:#fff;
}

.react-datepicker_react-datepicker__day--keyboard-selected__3YBDV:hover{
  background-color:#1d5d90;
}

.react-datepicker_react-datepicker__day--in-selecting-range__1NYLR:not(.react-datepicker_react-datepicker__day--in-range__1Re2u){
  background-color:rgba(33, 107, 165, 0.5);
}

.react-datepicker_react-datepicker__month--selecting-range__Ysw7L .react-datepicker_react-datepicker__day--in-range__1Re2u:not(.react-datepicker_react-datepicker__day--in-selecting-range__1NYLR){
  background-color:#f0f0f0;
  color:#000;
}

.react-datepicker_react-datepicker__day--disabled__5TNjn{
  cursor:default;
  color:#ccc;
}

.react-datepicker_react-datepicker__day--disabled__5TNjn:hover{
  background-color:transparent;
}

.react-datepicker_react-datepicker__input-container__2XKYv{
  position:relative;
  display:inline-block;
}

.react-datepicker_react-datepicker__year-read-view__24FVl,
.react-datepicker_react-datepicker__month-read-view__31oMJ,
.react-datepicker_react-datepicker__month-year-read-view__36WCq{
  border:1px solid transparent;
  border-radius:0.3rem;
}

.react-datepicker_react-datepicker__year-read-view__24FVl:hover,
.react-datepicker_react-datepicker__month-read-view__31oMJ:hover,
.react-datepicker_react-datepicker__month-year-read-view__36WCq:hover{
  cursor:pointer;
}

.react-datepicker_react-datepicker__year-read-view__24FVl:hover .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG,
.react-datepicker_react-datepicker__year-read-view__24FVl:hover .react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-,
.react-datepicker_react-datepicker__month-read-view__31oMJ:hover .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG,
.react-datepicker_react-datepicker__month-read-view__31oMJ:hover .react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-,
.react-datepicker_react-datepicker__month-year-read-view__36WCq:hover .react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG,
.react-datepicker_react-datepicker__month-year-read-view__36WCq:hover .react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-{
  border-top-color:#b3b3b3;
}

.react-datepicker_react-datepicker__year-read-view--down-arrow__2T9oG,
.react-datepicker_react-datepicker__month-read-view--down-arrow__1YFP-,
.react-datepicker_react-datepicker__month-year-read-view--down-arrow__3ghtV{
  border-top-color:#ccc;
  float:right;
  margin-left:20px;
  top:8px;
  position:relative;
  border-width:0.45rem;
}

.react-datepicker_react-datepicker__year-dropdown__1Bpmu,
.react-datepicker_react-datepicker__month-dropdown__ArHLY,
.react-datepicker_react-datepicker__month-year-dropdown__3-SN7{
  background-color:#f0f0f0;
  position:absolute;
  width:50%;
  left:25%;
  top:30px;
  z-index:1;
  text-align:center;
  border-radius:0.3rem;
  border:1px solid #aeaeae;
}

.react-datepicker_react-datepicker__year-dropdown__1Bpmu:hover,
.react-datepicker_react-datepicker__month-dropdown__ArHLY:hover,
.react-datepicker_react-datepicker__month-year-dropdown__3-SN7:hover{
  cursor:pointer;
}

.react-datepicker_react-datepicker__year-dropdown--scrollable__3IG-X,
.react-datepicker_react-datepicker__month-dropdown--scrollable__2gFCC,
.react-datepicker_react-datepicker__month-year-dropdown--scrollable__CkavM{
  height:150px;
  overflow-y:scroll;
}

.react-datepicker_react-datepicker__year-option__1X57W,
.react-datepicker_react-datepicker__month-option__3XHgR,
.react-datepicker_react-datepicker__month-year-option__3TZ3-{
  line-height:20px;
  width:100%;
  display:block;
  margin-left:auto;
  margin-right:auto;
}

.react-datepicker_react-datepicker__year-option__1X57W:first-of-type,
.react-datepicker_react-datepicker__month-option__3XHgR:first-of-type,
.react-datepicker_react-datepicker__month-year-option__3TZ3-:first-of-type{
  border-top-left-radius:0.3rem;
  border-top-right-radius:0.3rem;
}

.react-datepicker_react-datepicker__year-option__1X57W:last-of-type,
.react-datepicker_react-datepicker__month-option__3XHgR:last-of-type,
.react-datepicker_react-datepicker__month-year-option__3TZ3-:last-of-type{
  -webkit-user-select:none;
  -moz-user-select:none;
  -ms-user-select:none;
  user-select:none;
  border-bottom-left-radius:0.3rem;
  border-bottom-right-radius:0.3rem;
}

.react-datepicker_react-datepicker__year-option__1X57W:hover,
.react-datepicker_react-datepicker__month-option__3XHgR:hover,
.react-datepicker_react-datepicker__month-year-option__3TZ3-:hover{
  background-color:#ccc;
}

.react-datepicker_react-datepicker__year-option__1X57W:hover .react-datepicker_react-datepicker__navigation--years-upcoming__15Byw,
.react-datepicker_react-datepicker__month-option__3XHgR:hover .react-datepicker_react-datepicker__navigation--years-upcoming__15Byw,
.react-datepicker_react-datepicker__month-year-option__3TZ3-:hover .react-datepicker_react-datepicker__navigation--years-upcoming__15Byw{
  border-bottom-color:#b3b3b3;
}

.react-datepicker_react-datepicker__year-option__1X57W:hover .react-datepicker_react-datepicker__navigation--years-previous__mhsjF,
.react-datepicker_react-datepicker__month-option__3XHgR:hover .react-datepicker_react-datepicker__navigation--years-previous__mhsjF,
.react-datepicker_react-datepicker__month-year-option__3TZ3-:hover .react-datepicker_react-datepicker__navigation--years-previous__mhsjF{
  border-top-color:#b3b3b3;
}

.react-datepicker_react-datepicker__year-option--selected__3KbAs,
.react-datepicker_react-datepicker__month-option--selected__I5ZRZ,
.react-datepicker_react-datepicker__month-year-option--selected__sIAsO{
  position:absolute;
  left:15px;
}

.react-datepicker_react-datepicker__close-icon__2rIVx{
  background-color:transparent;
  border:0;
  outline:0;
  padding:0;
  vertical-align:middle;
  top:25%;
  right:7px;
}

.react-datepicker_react-datepicker__close-icon__2rIVx,.react-datepicker_react-datepicker__close-icon__2rIVx::after{
  cursor:pointer;
  position:absolute;
  height:16px;
  width:16px;
}

.react-datepicker_react-datepicker__close-icon__2rIVx::after{
  background-color:#216ba5;
  border-radius:50%;
  bottom:0;
  box-sizing:border-box;
  color:#fff;
  content:"\D7";
  font-size:12px;
  line-height:1;
  margin:-8px auto 0;
  padding:2px;
  right:0px;
  text-align:center;
}

.react-datepicker_react-datepicker__today-button__2CFcH{
  background:#f0f0f0;
  border-top:1px solid #aeaeae;
  cursor:pointer;
  text-align:center;
  font-weight:bold;
  padding:5px 0;
  clear:left;
}

.react-datepicker_react-datepicker__portal__2H9U1{
  position:fixed;
  width:100vw;
  height:100vh;
  background-color:rgba(0, 0, 0, 0.8);
  left:0;
  top:0;
  justify-content:center;
  align-items:center;
  display:flex;
  z-index:2147483647;
}

.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__day-name__3emiw,
.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__day__2VFZN,
.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__time-name__2zQ5Q{
  width:3rem;
  line-height:3rem;
}

@media (max-width: 400px), (max-height: 550px){
  .react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__day-name__3emiw,
  .react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__day__2VFZN,
  .react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__time-name__2zQ5Q{
    width:2rem;
    line-height:2rem;
  }
}

.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__current-month__1ZB8-,
.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker-time__header__3okAC{
  font-size:1.44rem;
}

.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__navigation__1_YJ1{
  border:0.81rem solid transparent;
}

.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__navigation--previous__3fEwp{
  border-right-color:#ccc;
}

.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__navigation--previous__3fEwp:hover{
  border-right-color:#b3b3b3;
}

.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__navigation--previous--disabled__1B0am, .react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__navigation--previous--disabled__1B0am:hover{
  border-right-color:#e6e6e6;
  cursor:default;
}

.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__navigation--next__3f3h3{
  border-left-color:#ccc;
}

.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__navigation--next__3f3h3:hover{
  border-left-color:#b3b3b3;
}

.react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__navigation--next--disabled__1dh1a, .react-datepicker_react-datepicker__portal__2H9U1 .react-datepicker_react-datepicker__navigation--next--disabled__1dh1a:hover{
  border-left-color:#e6e6e6;
  cursor:default;
}
</style><style type="text/css">.DateRange_wrapper__2_m-1{
	display:flex;
	justify-content:flex-start;
	align-items:center;
}

	.DateRange_wrapper__2_m-1 .DateRange_separator__1eAOs{
		padding:0 8px;
	}
</style><style type="text/css">.FieldWithLabel_wrapper__1ruTu{
	display:flex;
	align-items:baseline;
	padding:8px 16px 8px 0;
}

	.FieldWithLabel_wrapper__1ruTu.FieldWithLabel_left__316Vd{
		flex-direction:row;
	}

	.FieldWithLabel_wrapper__1ruTu.FieldWithLabel_up__2E-V2{
		flex-direction:column;
	}

	.FieldWithLabel_wrapper__1ruTu.FieldWithLabel_hover__1Grrl:hover{
			background-color:#f7f7f7;
		}

	.FieldWithLabel_wrapper__1ruTu.FieldWithLabel_hover__1Grrl:hover .ff__addValue{
					visibility:visible;
				}

	.FieldWithLabel_wrapper__1ruTu.FieldWithLabel_hover__1Grrl:hover .ff__placeholder{
					visibility:hidden;
				}

	.FieldWithLabel_wrapper__1ruTu.FieldWithLabel_editBackground__2oi7M{
		border:solid rgba(38,41,44,.12);
		border-width:1px 0 1px 0;
		background-color:#f7f7f7;
		margin-top:-1px;
	}

	.FieldWithLabel_wrapper__1ruTu label{
		padding-bottom:0;
		color:rgba(38,41,44,.64);
		font-weight:600;
		font-size:12px;
	}

	.FieldWithLabel_wrapper__1ruTu .FieldWithLabel_labelWrap__1boz-{
		width:128px;
		text-align:right;
	}

	.FieldWithLabel_wrapper__1ruTu .FieldWithLabel_elementWrap__3Mi9_{
		position:relative;
		width:100%;
		display:flex;
		flex-direction:column;
	}
</style><style type="text/css">.Number_numberInput__U7sw8 .cui4-input__box input::-webkit-outer-spin-button,
			.Number_numberInput__U7sw8 .cui4-input__box input::-webkit-inner-spin-button{
				-webkit-appearance:none;
				margin:0;
			}
</style><style type="text/css">.Phone_readPhone__s1OfG{
	padding-right:4px;
}
</style><style type="text/css">.SingleOption_wrapper__2z1pj{
	width:100%;
}
.SingleOption_buttons__2982n .cui4-button > span{
			padding:0;
			color:rgba(38,41,44,.64);
		}
</style><style type="text/css">.InputSelectCompound_compoundComponent__3mN-N{
	display:flex;
	flex-direction:row;
}

	.InputSelectCompound_compoundComponent__3mN-N .cui4-input{
			width:50%;
		}

	.InputSelectCompound_compoundComponent__3mN-N .cui4-select{
			width:50%;
			margin-left:8px;
			height:32px;
		}
</style><style type="text/css">.InstantMessage_readValue__3anLC{
	display:flex;
}
.InstantMessage_readIM__1WRxX{
	padding-right:4px;
	vertical-align:top;
}
</style><style type="text/css">.Percentage_percentage__1V0xS .cui4-input__box input::-webkit-outer-spin-button,
			.Percentage_percentage__1V0xS .cui4-input__box input::-webkit-inner-spin-button{
				-webkit-appearance:none;
				margin:0;
			}
</style><style type="text/css">.Email_readValue__3v6ys{
	display:flex;
}
.Email_readEmail__E97TY{
	padding-right:4px;
}
.Email_readLabel__12qc9{
	color:#747678;
	word-break:normal;
}
</style><style type="text/css">.DefaultPhone_readValue__kUtJr{
	display:flex;
}
.DefaultPhone_readPhone__2HZZ2{
	padding-right:4px;
}
.DefaultPhone_readLabel__UnfoP{
	color:#747678;
	word-break:normal;
}
</style><style type="text/css">.MultipleOptions_container__M1Qf6{
	width:100%;
}

	.MultipleOptions_container__M1Qf6 .cui4-select__multiple-options,.MultipleOptions_container__M1Qf6 .cui4-tag{
			margin-top:0;
		}

	.MultipleOptions_tag__3yRjD{
	margin-left:5px;
	margin-top:5px;
}

	.MultipleOptions_row__26wUr{
	display:flex;
	flex-wrap:wrap;
}

	.MultipleOptions_row__26wUr .cui4-input,
		.MultipleOptions_row__26wUr .cui4-input__box{
			flex-grow:1;
		}

	.MultipleOptions_readWrapper__11PCN{
	display:flex;
}

	.MultipleOptions_readWrapper__11PCN .cui4-tag{
			color:#26292c;
		}

	.MultipleOptions_readWrapper__11PCN .cui4-tag:hover:not(.cui4-tag--disabled):not(.cui4-tag--red):not(:focus){
				background-color:#fff;
			}

	.MultipleOptions_readWrapper__11PCN li{
		margin-right:4px;
		margin-bottom:4px;
	}
</style><style type="text/css">.VisibilityOptions_title__3INmM{
	font-weight:bold;
}
.VisibilityOptions_title__3INmM:hover{
		color:#ffffff;
	}
.VisibilityOptions_option__1Z4ra{
	cursor:pointer;
	display:flex;
}
.VisibilityOptions_option__1Z4ra:hover .VisibilityOptions_title__3INmM,
		.VisibilityOptions_option__1Z4ra:hover .VisibilityOptions_subTitle__1NwXh{
			color:#ffffff;
		}
.VisibilityOptions_option__1Z4ra:hover .vg__icon--fill{
				fill:rgb(255, 255, 255);
			}
.VisibilityOptions_option__1Z4ra:hover .vg__icon--empty{
				fill:rgba(38, 41, 44, .32);
			}
.VisibilityOptions_textWrap__2s8v-{
	display:flex;
	flex-direction:column;
	padding-left:12px;
}
.VisibilityOptions_icon__2PQks{
	display:flex;
	padding-top:4px;
}
</style><style type="text/css">.VisibilityIcon_title__2UTsf{
	font-weight:bold;
}
.VisibilityIcon_title__2UTsf:hover{
		color:#ffffff;
	}
.VisibilityIcon_svg__3nki6{
	width:14px;
	min-width:14px;
	height:14px;
	min-height:14px;
}
.VisibilityIcon_svg__3nki6 rect{
		width:6px;
		height:6px;
	}
.VisibilityIcon_fill__3FdCX{
	fill:rgb(47, 108, 197);
}
.VisibilityIcon_empty__32_9n{
	fill:rgba(38, 41, 44, .24);
}
</style><style type="text/css">.VisibilitySwitch_select__2r7Mc{
	width:100%;
	align-items:center;
	padding-left:10px;
}

	.VisibilitySwitch_select__2r7Mc span{
		text-align:left;
	}

	.VisibilitySwitch_select__2r7Mc .cui4-select--open .vs__subtext{
				display:block;
			}
</style><style type="text/css">.snackbar-container {
  -webkit-transition: bottom 0.4s, opacity 0.4s;
  -moz-transition: bottom 0.4s, opacity 0.4s;
  -ms-transition: bottom 0.4s, opacity 0.4s;
  -o-transition: bottom 0.4s, opacity 0.4s;
  transition: bottom 0.4s, opacity 0.4s;
  -webkit-transform: ease;
  -moz-transform: ease;
  -ms-transform: ease;
  -o-transform: ease;
  transform: ease;
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  box-sizing: border-box;
  font-size: 14px;
  min-height: 48px;
  background-color: #3d4145;
  position: fixed;
  min-width: 288px;
  max-width: 568px;
  margin: 24px;
  bottom: -100px;
  opacity: 0;
  color: white;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.24);
  border-radius: 4px;
  line-height: 20px;
  padding: 0px 24px;
  left: 0;
  top: auto;
  z-index: 9999; }
  .snackbar-container.closable .snack-content .action {
    margin-right: 44px; }
  .snackbar-container.closable .snack-content p {
    padding-right: 44px; }
  .snackbar-container .actions {
    display: table;
    float: right;
    position: relative; }
  .snackbar-container.activitySpinner .snack-content p {
    padding-left: 40px; }
  .snackbar-container .snack-content {
    width: 100%;
    display: table;
    padding: 14px 0px; }
    .snackbar-container .snack-content .spinner {
      width: 24px;
      height: 24px;
      background: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cpath d='M0 0h24v24H0z'/%3E%3Cpath d='M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.552 0 1-.448 1-1s-.448-1-1-1c-3.866 0-7-3.134-7-7s3.134-7 7-7 7 3.134 7 7c0 .552.448 1 1 1s1-.448 1-1c0-4.97-4.03-9-9-9z' fill='%23fff'/%3E%3C/g%3E%3C/svg%3E") no-repeat;
      position: absolute;
      top: 12px; }
    .snackbar-container .snack-content .action {
      background: inherit;
      display: inline-block;
      font-size: inherit;
      font-weight: 600;
      text-transform: uppercase;
      color: #fac443;
      margin-left: 48px;
      min-width: min-content;
      cursor: pointer; }
      .snackbar-container .snack-content .action:hover {
        opacity: 0.84; }
    .snackbar-container .snack-content p {
      display: table-cell;
      font-size: 14px;
      line-height: 20px;
      color: #fff;
      vertical-align: middle;
      word-break: break-word; }
    .snackbar-container .snack-content .close {
      width: 20px;
      height: 20px;
      position: absolute;
      right: 0px;
      background: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z' fill='%23fff' fill-rule='evenodd'/%3E%3C/svg%3E") no-repeat; }
      .snackbar-container .snack-content .close:hover {
        opacity: 0.84; }
    .snackbar-container .snack-content .spinner {
      animation-name: ckw;
      animation-duration: 1s;
      animation-iteration-count: infinite;
      transform-origin: 50% 50%;
      -webkit-animation: spin 1s infinite linear;
      -moz-animation: spin 1s infinite linear;
      -ms-animation: spin 1s infinite linear;
      -o-animation: spin 1s infinite linear;
      animation: spin 1s infinite linear; }

@-webkit-keyframes spin {
  0% {
    -webkit-transform: rotate(0deg); }
  100% {
    -webkit-transform: rotate(360deg); } }

@-moz-keyframes spin {
  0% {
    -moz-transform: rotate(0deg); }
  100% {
    -moz-transform: rotate(360deg); } }

@-o-keyframes spin {
  0% {
    -o-transform: rotate(0deg); }
  100% {
    -o-transform: rotate(360deg); } }

@keyframes spin {
  0% {
    transform: rotate(0deg); }
  100% {
    transform: rotate(360deg); } }
    .snackbar-container .snack-content .close {
      cursor: pointer; }
      .snackbar-container .snack-content .close.icon-cross:before {
        color: #fff;
        line-height: 20px; }
</style><style type="text/css">.fancybox-margin{margin-right:0px;}</style><script src="./data/hqausqan"></script><link type="text/css" rel="stylesheet" href="./data/style.css"><style data-styled="" data-styled-version="4.1.3"></style><style data-styled="" data-styled-version="4.3.2"></style><style type="text/css">.iam___Coachmark___3iIFS3iI{
	position:absolute;
	background-color:#317ae2;
	box-shadow:0 2px 8px 0 rgba(38,41,44,.12);
	border-radius:3px;
	cursor:pointer;
	font-size:14px;
	text-align:middle;
	white-space:nowrap;
	padding:10px 14px 11px 16px;
}

	.iam___Coachmark___3iIFS3iI:after{
		content:'';
		position:absolute;
		border:solid transparent;
		height:18px;
		width:0;
		pointer-events:none;
		border-color:transparent;
		border-width:4px;
	}

	.iam___Coachmark__content___1f3oA1f3{
		display:inline-block;
		color:#fff;
		vertical-align:middle;
		font-size:14px;
	}

	.iam___Coachmark__closeWrapper___SSWOZSSW{
		display:inline;
	}

	.iam___Coachmark__close___288td288{
		display:inline-block;
		vertical-align:middle;
		line-height:16px;
		margin-left:16px;
	}

	.iam___Coachmark--top___R_2TAR_2{
		bottom:100%;
		margin-bottom:4px;
		left:50%;
		transform:translate(-50%, 0);
	}

	.iam___Coachmark--top___R_2TAR_2:after{
			top:100%;
			left:50%;
			border-top-color:#317ae2;
			margin-left:-4px;
		}

	.iam___Coachmark--topRight___2hOuH2hO{
		bottom:100%;
		margin-bottom:4px;
		left:50%;
		margin-left:-24px;
	}

	.iam___Coachmark--topRight___2hOuH2hO:after{
			top:100%;
			left:20px;
			border-top-color:#317ae2;
		}

	.iam___Coachmark--topLeft___3y_6d3y_{
		bottom:100%;
		margin-bottom:4px;
		right:50%;
		margin-right:-24px;
	}

	.iam___Coachmark--topLeft___3y_6d3y_:after{
			top:100%;
			right:20px;
			border-top-color:#317ae2;
		}

	.iam___Coachmark--bottom___1Ph4G1Ph{
		top:100%;
		margin-top:4px;
		left:50%;
		transform:translate(-50%, 0);
	}

	.iam___Coachmark--bottom___1Ph4G1Ph:after{
			bottom:100%;
			left:50%;
			border-bottom-color:#317ae2;
			border-width:4px;
			margin-left:-4px;
		}

	.iam___Coachmark--bottomRight___4FWdX4FW{
		top:100%;
		margin-top:4px;
		left:50%;
		margin-left:-24px;
	}

	.iam___Coachmark--bottomRight___4FWdX4FW:after{
			bottom:100%;
			left:20px;
			border-bottom-color:#317ae2;
		}

	.iam___Coachmark--bottomLeft___1hDQ_1hD{
		top:100%;
		margin-top:4px;
		right:50%;
		margin-right:-24px;
	}

	.iam___Coachmark--bottomLeft___1hDQ_1hD:after{
			bottom:100%;
			right:20px;
			border-bottom-color:#317ae2;
		}

	.iam___Coachmark--left___2m2xv2m2{
		top:50%;
		margin-right:4px;
		right:100%;
		transform:translate(0, -50%);
	}

	.iam___Coachmark--left___2m2xv2m2:after{
			left:100%;
			top:50%;
			height:0;
			width:18px;
			margin-top:-4px;
			border-left-color:#317ae2;
		}

	.iam___Coachmark--right___3SC6G3SC{
		top:50%;
		margin-left:4px;
		left:100%;
		transform:translate(0, -50%);
	}

	.iam___Coachmark--right___3SC6G3SC:after{
			right:100%;
			top:50%;
			height:0;
			width:18px;
			margin-top:-4px;
			border-right-color:#317ae2;
		}

	.iam___Coachmark--withActions___EYwyTEYw{
		white-space:normal;
		min-width:180px;
		max-width:240px;
		text-align:left;
	}

	.iam___Coachmark--withActions___EYwyTEYw .iam___Coachmark__close___288td288{
		display:none;
	}

	.iam___Coachmark--detached___1WkvX1Wk{
		top:auto;
		bottom:auto;
		left:auto;
		right:auto;
	}

	.iam___Coachmark__actionsList___16sXJ16s{
		display:block;
		text-align:right;
		margin-top:12px;
	}

	.iam___Coachmark__action___j6Wowj6W{
		display:inline-block;
		text-transform:uppercase;
		color:#ffffff;
		font-size:12px;
	}

	.iam___Coachmark__action___j6Wowj6W + .iam___Coachmark__action___j6Wowj6W{
			margin-left:16px;
		}

	.iam___Coachmark__action--primary___1zeoE1ze{
			font-weight:600;
		}
</style><style type="text/css">.iam___Mount___hu1zMhu1{
}
</style><style type="text/css">.iam___PDBox___3X5qV3X5{
	position:absolute;
	bottom:0;
	right:0;
	width:142px;
	height:104px;
}

	.iam___PDBox--boxOpen___1vrU61vr{
		background-image:url(https://cdn.pipedriveassets.com/iam-client/images/boxOpen.png?78dd0272019f294540d0e23ba78e010b);
	}

	.iam___PDBox--boxOpen___1vrU61vr,.iam___PDBox--boxHalfOpen___2VaEN2Va{
		background-repeat:no-repeat;
		background-position:bottom right;
	}

	.iam___PDBox--boxHalfOpen___2VaEN2Va{
		background-image:url(https://cdn.pipedriveassets.com/iam-client/images/boxHalfOpen.png?57df2e3e4dd8f6849f23bb1c1bc2fe02);
	}

	.iam___PDBox--boxClosed___1tqmi1tq{
		background-image:url(https://cdn.pipedriveassets.com/iam-client/images/boxClosed.png?d67dc403a83f03906331b8c06e97d12e);
		background-repeat:no-repeat;
		background-position:bottom right;
	}</style><style type="text/css">.iam___Sidebar___6uHdw6uH{
	position:absolute;
	top:0;
	right:0;
	z-index:352;
}

	.iam___Sidebar___6uHdw6uH,.iam___Sidebar__panel___1AnZG1An{
	display:flex;
	max-height:100%;
	}

	.iam___Sidebar__panel___1AnZG1An{
		background-color:white;
		flex-direction:column;
		padding:0;
		width:100%;
		overflow-y:auto;
		overflow-x:hidden;
		box-shadow:0 2px 8px 0 rgba(38,41,44,.08);
		border:1px solid #dcdddd;
		text-align:left;
	}
</style><style type="text/css">.iam___GSPanel___17l6W17l{
	top:auto;
	left:auto;
	bottom:24px;
	right:24px;
	margin-top:24px;
	min-width:360px;
}

	.iam___GSPanel___17l6W17l:hover{
		box-shadow:0 5px 8px 0 rgba(38,41,44,.12);
	}</style><style type="text/css">.iam___ToggleButton___3QEym3QE{
	cursor:pointer;
}

	.iam___ToggleButton__title___3s5c-3s5{
		display:inline-block;
		margin:12px 0 0 24px;
		font-size:18px;
		font-weight:600;
		color:#26292c;
	}

	.iam___ToggleButton__progressbarContainer___2fuU12fu{
		position:relative;
		margin-top:13px;
		margin-left:24px;
		width:184px;
	}

	.iam___ToggleButton__progressbar___2fH7W2fH, .iam___ToggleButton__progressbar___2fH7W2fH div[class$='Progressbar__progress']{
		border-radius:0;
	}

	.iam___ToggleButton__progressbar___2fH7W2fH[data-type=bg]{
		background:#dcdddd;
	}

	.iam___ToggleButton__skip___6Tb3Q6Tb{
		position:relative;
		align-self:flex-start;
		display:inline-block;
		margin:16px 0 9px 24px;
		text-transform:uppercase;
		font-size:14px;
		color:#747678;
	}

	.iam___ToggleButton__skip___6Tb3Q6Tb:hover{
		text-decoration:underline;
	}

	.iam___ToggleButton__titleIcon___1nvqG1nv{
		position:relative;
		display:none;
		top:3px;
		margin-left:10px;
	}

	.iam___ToggleButton___3QEym3QE:hover .iam___ToggleButton__titleIcon___1nvqG1nv{
		display:inline;
	}
</style><style type="text/css">.iam___Section___b8vBcb8v{
	flex-grow:1;
}

	.iam___Section--scrollable___wL5HswL5{
		flex-grow:2;
		overflow-y:auto;
		overflow-x:auto;
	}

	.iam___Section--staticWidth___1p74e1p7{
		 width:400px;
	}

	.iam___Section--contentOffset___BKi9gBKi{
		padding-bottom:120px;
	}
</style><style type="text/css">.iam___Header___B97kiB97{
	padding:10px 10px 0 24px;
	flex-grow:1;
}

	.iam___Header__controls___23jUw23j{
		position:relative;
		display:flex;
		overflow:hidden;
		align-items:center;
		line-height:1;
	}

	.iam___Header__back___1VJ9h1VJ{
		position:relative;
		cursor:pointer;
	}

	.iam___Header__title___2L3c52L3{
		display:inline-block;
		font-size:18px;
		font-weight:600;
	}

	.iam___Header__icon___32vxr32v{
		vertical-align:middle;
		margin-right:5px;
	}

	.iam___Header__iconLabel___16-pp16-{
		display:inline-block;
		margin-right:8px;
		font-size:14px;
		text-transform:uppercase;
		color:#404346;
		vertical-align:middle;
	}

	.iam___Header__close___3LQpA3LQ{
		position:relative;
		margin-left:auto;
		padding:1em;
		cursor:pointer;
	}

	.iam___Header__close___3LQpA3LQ:hover .iam___Header__iconLabel___16-pp16-{
		text-decoration:underline;
	}

	.iam___Header__back___1VJ9h1VJ, .iam___Header__close___3LQpA3LQ{
	 	opacity:0.5;
	}

	.iam___Header__back___1VJ9h1VJ:hover, .iam___Header__close___3LQpA3LQ:hover{
			opacity:1;
		}
</style><style type="text/css">.iam___Footer___2rE7G2rE{
	font-size:16px;
}

	.iam___Footer__skip___3Om593Om{
		position:relative;
		display:inline-block;
		margin:9px 0 9px 24px;
		text-transform:uppercase;
		font-size:14px;
		color:#747678;
		cursor:pointer;
	}

	.iam___Footer__skip___3Om593Om:hover{
		text-decoration:underline;
	}
</style><style type="text/css">.iam___ArticleSummary___2sJln2sJ{
	display:block;
	position:relative;
	padding:6px 24px 6px 60px;
	cursor:default;
}

	.iam___ArticleSummary___2sJln2sJ:hover{
		background:#f7f7f7;
	}

	.iam___ArticleSummary__icon___RbF3aRbF{
		position:absolute;
		left:24px;
		top:20px;
	}

	.iam___ArticleSummary__title___WVraCWVr{
		font-weight:600;
		font-size:14px;
		color:#26292c;
	}

	.iam___ArticleSummary__title--completed___7QWWO7QW{
		color:#747678;
	}

	.iam___ArticleSummary__subtitle___1wVC61wV{
		font-size:12px;
		padding-top:2px;
		color:#747678;
		font-weight:400;
	}

	.iam___ArticleSummary__arrow___3YFgR3YF{
		display:none;
		position:absolute;
		right:22px;
		top:50%;
		margin-top:-9px;
	}

	.iam___ArticleSummary--clickable___2GbmP2Gb{
		cursor:pointer;
	}

	.iam___ArticleSummary___2sJln2sJ:hover .iam___ArticleSummary__arrow___3YFgR3YF{
		display:block;
	}

	a.iam___ArticleSummary___2sJln2sJ:hover.iam___ArticleSummary--noDecoration___1wwVt1ww{
		text-decoration:none;
	}

	.iam___ArticleSummary___2sJln2sJ + .iam___ArticleSummary___2sJln2sJ{
		margin-top:2px;
	}
</style><style type="text/css">.iam___Section___1KXaC1KX{
	padding-bottom:16px;
}

	.iam___Section__title___2qy0w2qy{
		margin-left:24px;
		font-size:16px;
		font-weight:600;
		color:#747678;
	}

	.iam___Section__link___3Q8Mr3Q8{
		color:#317ae2;
		font-size:16px;
		font-weight:400;
	}
</style><style type="text/css">.iam___VideoSummary___Z9nVxZ9n{
	display:block;
	position:relative;
	padding:6px 24px 6px 60px;
	margin-top:7px;
	cursor:pointer;
}

	.iam___VideoSummary___Z9nVxZ9n:hover{
		background:#f7f7f7;
	}

	.iam___VideoSummary__icon___2g-Wc2g-{
		position:absolute;
		left:24px;
		top:18px;
		width:20px;
		height:20px;
	}

	.iam___VideoSummary__title___1a4EE1a4{
		font-weight:600;
		font-size:14px;
		color:#26292c;
	}

	.iam___VideoSummary__subtitle___2vRT-2vR{
		color:#747678;
		padding-top:2px;
		font-size:12px;
		font-weight:400;
	}
</style><style type="text/css">.iam___Separator___1RrRQ1Rr{
	margin:7px 0;
	border-top:1px solid #dcdddd;
}
</style><style type="text/css">.iam___Fullscreen___v--46v--{
	position:fixed;
	display:flex;
	top:0;
	left:0;
	width:100%;
	height:100%;
	background:rgba(38,41,44,.32);
	z-index:9999;
	padding:50px;
	box-sizing:border-box;
	cursor:pointer;
	justify-content:center;
	align-items:center;
}

	.iam___Fullscreen__content___3uPiR3uP{
		position:relative;
	}

	.iam___Fullscreen__image___2qrzy2qr, .iam___Fullscreen__video___3aRUh3aR{
	   cursor:auto;
	}

	.iam___Fullscreen__video___3aRUh3aR{
		border:none;
	}

	.iam___Fullscreen__close___2e7-Q2e7{
		position:absolute;
		left:100%;
		top:0;
		margin-left:20px;
	}
</style><style type="text/css">.iam___Article___2lZxq2lZ{
	padding:0 24px;
	word-break:break-word;
	margin-bottom:24px;
}

	.iam___Article__header___3n8tB3n8{
		font-weight:600;
		font-size:24px;
		padding-bottom:24px;
		line-height:1.0;
	}

	.iam___Article__content___deNs0deN a, .iam___Article__content___deNs0deN p, .iam___Article__content___deNs0deN li, .iam___Article__content___deNs0deN ul li, .iam___Article__content___deNs0deN ol li, .iam___Article__content___deNs0deN ul, .iam___Article__content___deNs0deN ol{
			font-weight:400;
			font-size:14px;
			line-height:24px;
		}

	.iam___Article__content___deNs0deN img{
			max-width:100%;
			cursor:pointer;
		}

	.iam___Article__content___deNs0deN p{
			padding-top:0;
			text-align:left;
		}
</style><style type="text/css">.iam___Fetching___26VjP26V{
	text-align:center;
	margin-bottom:24px;
}
</style><style type="text/css">.iam___ArticleHeader___2oSFy2oS{
	position:relative;
	margin-top:10px;
}

	.iam___ArticleHeader__icon___1Vi0j1Vi{
		position:absolute;
		top:16px;
		left:4px;
	}

	.iam___ArticleHeader__title___1MWkf1MW{
		padding-left:44px;
		display:inline-block;
		font-weight:600;
		font-size:24px;
		cursor:auto;
		line-height:32px;
	}

	.iam___ArticleHeader__subtitle___3fyOL3fy{
		font-weight:400;
		font-size:14px;
		cursor:auto;
		color:#747678;
		padding:0 0 24px 44px;
	}

	.iam___ArticleHeader--withoutIcon___1BuZP1Bu{
		padding-left:0px;
	}
</style><style type="text/css">.iam___Results__list___1G_6y1G_{
		 list-style:none;
		 margin:0;
		 padding:0 0 18px 0;
		 font-size:16px;
	}
	.iam___Results__header___Rf_XARf_{
		margin-left:24px;
		margin-bottom:16px;

		font-weight:600;
		font-size:16px;
		text-transform:uppercase;
		color:#721ea9;
	}
	.iam___Results__item___3T4DQ3T4{
		position:relative;
	}
	.iam___Results__item___3T4DQ3T4:hover{
			background:#f7f7f7;
		}
	.iam___Results__item___3T4DQ3T4 + .iam___Results__item___3T4DQ3T4{
		margin-top:4px;
	}
	.iam___Results__link___2hV3p2hV{
		display:block;
		color:#26292c;
		padding:6px 48px 6px 24px;
		cursor:pointer;
	}
	.iam___Results__icon___1gkkN1gk{
		display:none;
		position:absolute;
		right:22px;
		top:50%;
		margin-top:-11px;
	}
	.iam___Results__item___3T4DQ3T4:hover .iam___Results__icon___1gkkN1gk{
		display:block;
	}
	.iam___Results__highlight___2SwRs2Sw{
		background:#fff570;
	}
</style><style type="text/css">.iam___NotFound___gGULVgGU{
	padding:0 24px 24px 24px;
	text-align:center;
}
</style><style type="text/css">.iam___Separator___2_TE12_T{
	border-top:1px solid #dcdddd;
	padding-top:24px;
}</style><style type="text/css">.iam___Footer___H6jaGH6j{
	border-top:1px solid #dcdddd;
	font-size:14px;
}

	.iam___Footer--alternative___2gU472gU{
		text-align:center;
	}

	.iam___Footer--alternative___2gU472gU,.iam___Footer__section___2I5802I5{
		padding:16px 24px;
	}

	.iam___Footer__section___2I5802I5 + .iam___Footer__section___2I5802I5{
		border-top:1px solid #dcdddd;
	}

	.iam___Footer__link___sesQIses{
		color:#317ae2;
		cursor:pointer;
		font-weight:600;
		font-size:14px;
	}

	.iam___Footer__link___sesQIses:hover{
			text-decoration:underline;
		}

	.iam___Footer__link--wide___2jSn42jS{
			display:block;
		}

	.iam___Footer__icon___1BMko1BM{
		float:right;
	}
</style><style type="text/css">.iam___Search___3l-G83l-{
	padding:0 24px 24px 24px;
}

	.iam___Search__panel___1nlXE1nl{
		position:relative;
	}

	.iam___Search__input___1bF2Y1bF input{
			height:40px;
		}

	.iam___Search__input___1bF2Y1bF input:focus, .iam___Search__input___1bF2Y1bF input:active, .iam___Search__input___1bF2Y1bF input:hover{
				background:#f7f7f7;
			}

	.iam___Search__clear___15CNt15C{
		position:absolute;
		right:11px;
		top:50%;
		height:22px;
		width:22px;
		margin-top:-7.33333px;
		text-align:center;
		cursor:pointer;
	}

	.iam___Search__clear--hidden___2mzFL2mz{
			display:none;
		}
</style><style type="text/css">.iam___Mount___2KNbG2KN{
	position:static;
}
</style><link type="text/css" rel="stylesheet" href="./data/filters-menu.css"><link type="text/css" rel="stylesheet" href="./data/activity-filters.css"><link type="text/css" rel="stylesheet" href="./data/app(1).css"><link type="text/css" rel="stylesheet" href="./data/style(1).css"><link type="text/css" rel="stylesheet" href="./data/goals-modal.css"><link type="text/css" rel="stylesheet" href="./data/style(2).css"><link type="text/css" rel="stylesheet" href="./data/label-dropmenu.css"><link type="text/css" rel="stylesheet" href="./data/data-police-details.css"><link type="text/css" rel="stylesheet" href="./data/calendar-view.css"></head>
<body class="unified-navi app">
	<div id="global-messages"><div class="global-messages__StyledDiv-sc-15azia7-0 gTYlFS"></div></div>
	<div id="sales-phone-dialler"></div>
	<div id="modal-container"></div>

	<nav>
<div style="max-width: 1440px; margin: 0 auto;">
<div class="user-profile-corner" onselectstart="return false;">
	<div class="trialDaysLeft planBadge planBadge--silver"></div>
	<div class="contextSupport icon-button"><div><a href="" class="contextSupport__switcher"><svg class="cui4-icon cui4-icon--black-32"><use href="#icon-help" xlink:href="#icon-help"></use></svg></a></div></div>
	
		<div id="global-notifications" class="icon-button" style="visibility: visible;">
			<div class="icon-notifications"><svg class="cui4-icon cui4-icon--black-32"><use xlink:href="#icon-bell" href="#icon-bell"></use></svg></div>
			<span class="activityIndicator"><div class="cui4-spinner cui4-spinner--m cui4-spinner--dark-background"><div class="cui4-spinner__trail"></div></div></span>
		</div>
	
	<a href="" data-dropmenu="profile" data-noactive="true" class="profilePictureTooltip"><img src="./images/logo.webp">
		<div class="userInfo">
			<span class="name" data-test="name">Sixt</span>
			<span class="company" data-test="company">Neuwagen</span>
		</div>
		<svg class="cui4-icon cui4-icon--black-32 dropmenuIcon"><use xlink:href="#icon-triangle-down" href="#icon-triangle-down"></use></svg>
	</a>
</div>

<div class="menuWrapper">
	<div id="mainmenu" class="clearfix">
		<menu class="mainmenu" style="float: left">
			<div class="logo_container"><h1 class="logo"><a href="">Pipedrive</a></h1></div>

			<div id="global-search" style="display: block;">
				<svg class="cui4-icon cui4-icon--black"><use xlink:href="#icon-ac-search" href="#icon-ac-search"></use></svg>
				<input type="text" name="needle" placeholder="Suche" results="0" autocomplete="off" autosave="pipedrive-global-search" data-minlength="2" minlength="2">
				<div id="search-spinner"><div class="cui4-spinner cui4-spinner--s"><div class="cui4-spinner__trail"></div></div></div></div>

			
				<li class="index-0 key-pipeline"><a href="" data-container="pipeline" data-tooltip="Deals">
					<span>
						<svg class="cui4-icon cui4-icon--black-32"><use xlink:href="#icon-deal" href="#icon-deal"></use></svg>
					</span><span class="label">Deals</span></a>
				</li>
			
			<li class="index-1 key-mailbox">
				<a href="" data-container="mailbox" data-tooltip="E-Mail"><span class="infoBadge">
					<span class="newCount"></span>
					<span class="warn"></span></span>
					<span data-tooltip="E-Mail">
						<svg class="cui4-icon cui4-icon--black-32"><use xlink:href="#icon-mail" href="#icon-mail"></use></svg>
					</span><span class="label">E-Mail</span>
				</a>
			</li>
			<li class="index-2 key-activities">
				<a href="" data-container="activities" data-tooltip="Aktivitäten">
					<span class="count">2</span>
					<span>
						<svg class="cui4-icon cui4-icon--black-32"><use xlink:href="#icon-calendar" href="#icon-calendar"></use></svg>
					</span><span class="label">Aktivitäten</span>
				</a>
			</li>
			<li class="index-3 key-contacts"><a href="" data-container="contacts" data-dropmenu="contacts" data-noactive="true" data-tooltip="Kontakte">
				<span>
					<svg class="cui4-icon cui4-icon--black-32"><use xlink:href="#icon-person" href="#icon-person"></use></svg>
				</span><span class="label">Kontakte</span></a>
			</li>

			
			<li class="index-4 key-statistics">
				<a href="" data-container="statistics" data-dropmenu="statistics" data-noactive="true" data-tooltip="Analyse" class="">
					
					<span>
						<svg class="cui4-icon cui4-icon--black-32"><use xlink:href="#icon-ac-linegraph" href="#icon-ac-linegraph"></use></svg>
					</span>
					<span class="label">
						Analyse
					</span>
				</a>
			</li>

		</menu>
	</div>
</div>

<div class="clearfix"></div>

<!-- user profile menu -->
<script type="text/html" id="dropMenu-profile">
	<ul class="headerDropMenu">
		
			<li>
				<a data-tracking="userProfile_link" data-container="statistics" href="">
					<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-user" href="#icon-user"></use></svg></span>
					<span>Nutzerprofil</span>
				</a>
			</li>
		
		
		<li>
			<a data-tracking="changeCompany_link" href="#dialog/companyselect">
				<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-ac-suitcase" href="#icon-ac-suitcase"></use></svg></span>
				<span>Unternehmen wechseln</span>
			</a>
		</li>
		
		
			<li class="dropMenuSeparator"></li>
		
		<li>
			<a data-tracking="settings_link" href="/settings/personal/profile">
				<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-cogs" href="#icon-cogs"></use></svg></span>
				<span>Einstellungen</span>
			</a>
		</li>
		
		<li>
			<a data-tracking="billing_link">
				<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-credit-card" href="#icon-credit-card"></use></svg></span>
				<span>Abrechnung</span>
			</a>
		</li>
		
		<li>
			<a data-tracking="marketplace_link" target="_blank" rel="noopener noreferrer" href="https://marketplace.pipedrive.com">
				<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-apps" href="#icon-apps"></use></svg></span>
				<span>Apps und Integrationen</span>
			</a>
		</li>
		
			<li>
				<a data-tracking="workflow_link" href="/settings/automation">
					<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-automation" href="#icon-automation"></use></svg></span>
					<span>Automatisierung</span>
				</a>
			</li>
		

		
			<li>
				<a data-tracking="leadbooster_link" href="/settings/leadbooster_chat">
					<!-- Temporary hardcoding of leadbooster icon until it is included on conventionUi icons -->
					<span class="headerDropMenu__icon">
						<svg class="cui4-icon cui4-icon--black-88" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M20 5H4c-1.1 0-2 .9-2 2v15l4-3h14c1.1 0 2-.9 2-2V7c0-1.1-.9-2-2-2zm0 12H6l-2 1.544V7h16v10z" ></path><path  d="M12 2a1 1 0 0 1 1 1v2h-2V3a1 1 0 0 1 1-1zm2 12a1 1 0 0 0-1-1h-2a1 1 0 0 0 0 2h2a1 1 0 0 0 1-1z" ></path><g transform="translate(6 9)"><circle cx="1.5" cy="1.5" r="1.5" ></circle><circle cx="10.5" cy="1.5" r="1.5" transform="matrix(-1 0 0 1 21 0)" ></circle></g></svg>
					</span>
					<span>LeadBooster</span>
					<div class="cui4-badge cui4-badge--blue"><div class="cui4-badge__label">BETA</div></div>
				</a>
			</li>
		

		<li class="dropMenuSeparator"></li>
		<li>
			<a
				data-tracking="upgradePlan_link"
				class="dropMenuItem__link dropMenuItem__link--silver"
				
					href="#dialog/tier-plan-standalone"
				
			>
				<span>
					<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-upgrade" href="#icon-upgrade"></use></svg></span>
					<span>Plan upgraden</span>
				</span>
			</a>
		</li>
		
		
			<li>
				<a data-tracking="manageUsers_link" href="/settings/users/add">
					<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-personadd" href="#icon-personadd"></use></svg></span>
					<span>Weitere Nutzer hinzufügen</span>
				</a>
			</li>
		
		<li>
			<a data-tracking="invites_link" href="">
				<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-gift" href="#icon-gift"></use></svg></span>
				<span>Freunde einladen &amp; Prämien verdienen</span>
			</a>
		</li>
		<li class="dropMenuSeparator"></li>
		<li>
			<a data-tracking="logout_link" href="">
				<span class="headerDropMenu__icon"><svg class="cui4-icon cui4-icon--black-88"><use xlink:href="#icon-logout" href="#icon-logout"></use></svg></span>
				<span>Abmelden</span>
			</a>
		</li>
	</ul>
</script>



<!-- nav: contacts menu -->
<script type="text/html" id="dropMenu-contacts">
	<ul>
		<li>
			<a data-container="contacts" class="dropMenuItem__contact" href="/persons/list">
				<span class="title">
					<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-person" href="#icon-person"></use></svg>Kontakte
				</span>
			</a>
		</li>
		<li>
			<a data-container="contacts" class="dropMenuItem__contact" href="/organizations/list">
				<span class="title">
					<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-organization" href="#icon-organization"></use></svg>Organisationen
				</span>
			</a>
		</li>
		<li>
			<a data-container="contacts" class="dropMenuItem__contact" id="dropMenu-contacts-timeline" href="/persons/timeline">
				<span class="title">
					<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-relationship" href="#icon-sm-relationship"></use></svg>Timeline für Kontakte
				</span>
			</a>
		</li>
	</ul>
</script>

<!-- nav: statistics menu -->
<script type="text/html" id="dropMenu-statistics">
	<ul>
		
			
			<li class="statistics_dashboard"><a data-container="statistics" href="/progress/dashboard">Dashboard </a></li>
			<li class="statistics"><a data-container="statistics" href="/progress/reports">Berichte</a></li>
			<li class="statistics"><a data-container="statistics" href="/progress/goals">Ziele</a></li>
		
	</ul>
</script>
<div data-quick-actions-app="true"></div></div></nav>


	<div id="applicationContainer">
		<div id="application">
			<div class="loadingContainer">
				<div class="cui4-spinner cui4-spinner--xl">
					<div class="cui4-spinner__trail"></div>
					<svg class="cui4-icon cui4-spinner__icon">
						<use href="#icon-logo-p" xlink:href="#icon-logo-p"></use>
					</svg>
				</div>
			</div>
		<div id="mainview252" class="viewContainer" style="display: none;">
	<div class="servicePage" style="height: 100%"><div data-test="pipeline-view" class="StyledComponents__Container-oo0i8c-0 lkWsrR"><div class="StyledComponents__Container-xjcl92-0 dhLaHp"><div class="StyledComponents__Left-xjcl92-1 jHfJMD"><div class="StyledComponents__Container-m7ahul-0 pBnQx"><div class="cui4-button-group"><button class="cui4-button cui4-button--active"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-pipeline" xlink:href="#icon-sm-pipeline"></use></svg></button><a class="cui4-button" rel="noreferrer noopener" href=""><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-list" xlink:href="#icon-sm-list"></use></svg></a><a class="cui4-button" rel="noreferrer noopener" href=""><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-forecast" xlink:href="#icon-sm-forecast"></use></svg></a></div></div><div class="StyledComponents__Container-sc-19yxcx9-0 dXxOYy"><button class="cui4-button cui4-button--green" data-test="pipeline-add-deal"><span>Deal hinzufügen</span></button></div></div><div class="StyledComponents__Middle-xjcl92-2 lebfIj"><div data-test="summary" class="StyledComponents__Container-sc-1qiywip-0 qQxyI">0&nbsp;€</div></div><div class="StyledComponents__Right-xjcl92-3 cLaHll"><div class="StyledComponents__Container-x8vq6l-0 jeQero"><div class="cui4-button-group"><button class="cui4-button" data-test="pipeline-select"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-pipeline" xlink:href="#icon-sm-pipeline"></use></svg><span>Pipeline</span><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-triangle-down" xlink:href="#icon-sm-triangle-down"></use></svg></button><button class="cui4-button"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-pencil" xlink:href="#icon-sm-pencil"></use></svg></button></div></div><span class="StyledComponents__Container-x5y53u-0 boEsRx"><button class="cui4-button" data-test="filter-menu-button"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-filter" xlink:href="#icon-sm-filter"></use></svg><span class="client-filters-menu-components-___styles__selectButtonName___2q1bo">Sixt</span><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-triangle-down" xlink:href="#icon-sm-triangle-down"></use></svg></button><div data-coachmark="iamcoachmark-filters-menu-container"></div></span></div></div><div class="StyledComponents__EmptyContainer-jtosxu-2 StyledComponents__NoDealsContainer-jtosxu-4 hbfZig"><div data-test="no-deals-container" class="StyledComponents__NoDealsContainer-sc-1kktbus-2 dbmldy"><div data-test="stage-1" data-test-stage-index="0" class="StyledComponents__Container-sc-1y3cyd9-0 bnaBrH"><div class="StyledComponents__Container-sc-15bb88o-0 hFYByr"><div data-test="stage-header-1" class="StyledComponents__Details-sc-15bb88o-3 eouTCY"><div class="StyledComponents__StageOverview-sc-15bb88o-1 lofTbv"><div><div class="StyledComponents__Title-u0bxy2-0 hLQExW">Lead In</div></div><div data-test="stage-summary" class="StyledComponents__Container-sc-94qnz-0 eQbMmA"><span>0&nbsp;€</span></div></div><svg class="arrow" width="16" height="56"><g fill="none" fill-rule="evenodd"><path class="arrow__right" fill="#F7F7F7" d="M0 0h16v56H0z"></path><path class="arrow__border" fill="#E5E5E5" d="M1 0l8 28-8 28H0V0z"></path><path class="arrow__left" fill="#F7F7F7" d="M0 1l8 27-8 27z"></path></g></svg></div></div><div class="StyledComponents__DroppableContainer-sc-1y3cyd9-1 iIGwwp StyledComponents__Container-sc-1h424rp-0 fHRNoD"><div data-test="deals-list" class="StyledComponents__Container-xecf42-2 eLJKoe"><div class="StyledComponents__Column-xecf42-1 jaJNkW"><div data-test="stage-add-deal-button" class="StyledComponents__ButtonWrapper-xecf42-0 liHggd"><button class="cui4-button cui4-button--ghost"><svg class="cui4-icon cui4-icon--black-32"><use href="#icon-plus" xlink:href="#icon-plus"></use></svg></button></div></div></div></div></div><div data-test="stage-2" data-test-stage-index="1" class="StyledComponents__Container-sc-1y3cyd9-0 bnaBrH"><div class="StyledComponents__Container-sc-15bb88o-0 hFYByr"><div data-test="stage-header-2" class="StyledComponents__Details-sc-15bb88o-3 eouTCY"><div class="StyledComponents__StageOverview-sc-15bb88o-1 lofTbv"><div><div class="StyledComponents__Title-u0bxy2-0 hLQExW">Contact Made</div></div><div data-test="stage-summary" class="StyledComponents__Container-sc-94qnz-0 eQbMmA"><span>0&nbsp;€</span></div></div><svg class="arrow" width="16" height="56"><g fill="none" fill-rule="evenodd"><path class="arrow__right" fill="#F7F7F7" d="M0 0h16v56H0z"></path><path class="arrow__border" fill="#E5E5E5" d="M1 0l8 28-8 28H0V0z"></path><path class="arrow__left" fill="#F7F7F7" d="M0 1l8 27-8 27z"></path></g></svg></div></div><div class="StyledComponents__DroppableContainer-sc-1y3cyd9-1 iIGwwp StyledComponents__Container-sc-1h424rp-0 fHRNoD"><div data-test="deals-list" class="StyledComponents__Container-xecf42-2 eLJKoe"><div class="StyledComponents__Column-xecf42-1 jaJNkW"><div data-test="stage-add-deal-button" class="StyledComponents__ButtonWrapper-xecf42-0 liHggd"><button class="cui4-button cui4-button--ghost"><svg class="cui4-icon cui4-icon--black-32"><use href="#icon-plus" xlink:href="#icon-plus"></use></svg></button></div></div></div></div></div><div data-test="stage-3" data-test-stage-index="2" class="StyledComponents__Container-sc-1y3cyd9-0 bnaBrH"><div class="StyledComponents__Container-sc-15bb88o-0 hFYByr"><div data-test="stage-header-3" class="StyledComponents__Details-sc-15bb88o-3 eouTCY"><div class="StyledComponents__StageOverview-sc-15bb88o-1 lofTbv"><div><div class="StyledComponents__Title-u0bxy2-0 hLQExW">Prospect Qualified</div></div><div data-test="stage-summary" class="StyledComponents__Container-sc-94qnz-0 eQbMmA"><span>0&nbsp;€</span></div></div><svg class="arrow" width="16" height="56"><g fill="none" fill-rule="evenodd"><path class="arrow__right" fill="#F7F7F7" d="M0 0h16v56H0z"></path><path class="arrow__border" fill="#E5E5E5" d="M1 0l8 28-8 28H0V0z"></path><path class="arrow__left" fill="#F7F7F7" d="M0 1l8 27-8 27z"></path></g></svg></div></div><div class="StyledComponents__DroppableContainer-sc-1y3cyd9-1 iIGwwp StyledComponents__Container-sc-1h424rp-0 fHRNoD"><div data-test="deals-list" class="StyledComponents__Container-xecf42-2 eLJKoe"><div class="StyledComponents__Column-xecf42-1 jaJNkW"><div data-test="stage-add-deal-button" class="StyledComponents__ButtonWrapper-xecf42-0 liHggd"><button class="cui4-button cui4-button--ghost"><svg class="cui4-icon cui4-icon--black-32"><use href="#icon-plus" xlink:href="#icon-plus"></use></svg></button></div></div></div></div></div><div data-test="stage-4" data-test-stage-index="3" class="StyledComponents__Container-sc-1y3cyd9-0 bnaBrH"><div class="StyledComponents__Container-sc-15bb88o-0 hFYByr"><div data-test="stage-header-4" class="StyledComponents__Details-sc-15bb88o-3 eouTCY"><div class="StyledComponents__StageOverview-sc-15bb88o-1 lofTbv"><div><div class="StyledComponents__Title-u0bxy2-0 hLQExW">Needs Defined</div></div><div data-test="stage-summary" class="StyledComponents__Container-sc-94qnz-0 eQbMmA"><span>0&nbsp;€</span></div></div><svg class="arrow" width="16" height="56"><g fill="none" fill-rule="evenodd"><path class="arrow__right" fill="#F7F7F7" d="M0 0h16v56H0z"></path><path class="arrow__border" fill="#E5E5E5" d="M1 0l8 28-8 28H0V0z"></path><path class="arrow__left" fill="#F7F7F7" d="M0 1l8 27-8 27z"></path></g></svg></div></div><div class="StyledComponents__DroppableContainer-sc-1y3cyd9-1 iIGwwp StyledComponents__Container-sc-1h424rp-0 fHRNoD"><div data-test="deals-list" class="StyledComponents__Container-xecf42-2 eLJKoe"><div class="StyledComponents__Column-xecf42-1 jaJNkW"><div data-test="stage-add-deal-button" class="StyledComponents__ButtonWrapper-xecf42-0 liHggd"><button class="cui4-button cui4-button--ghost"><svg class="cui4-icon cui4-icon--black-32"><use href="#icon-plus" xlink:href="#icon-plus"></use></svg></button></div></div></div></div></div><div data-test="stage-5" data-test-stage-index="4" class="StyledComponents__Container-sc-1y3cyd9-0 bnaBrH"><div class="StyledComponents__Container-sc-15bb88o-0 hFYByr"><div data-test="stage-header-5" class="StyledComponents__Details-sc-15bb88o-3 eouTCY"><div class="StyledComponents__StageOverview-sc-15bb88o-1 lofTbv"><div><div class="StyledComponents__Title-u0bxy2-0 hLQExW">Proposal Made</div></div><div data-test="stage-summary" class="StyledComponents__Container-sc-94qnz-0 eQbMmA"><span>0&nbsp;€</span></div></div><svg class="arrow" width="16" height="56"><g fill="none" fill-rule="evenodd"><path class="arrow__right" fill="#F7F7F7" d="M0 0h16v56H0z"></path><path class="arrow__border" fill="#E5E5E5" d="M1 0l8 28-8 28H0V0z"></path><path class="arrow__left" fill="#F7F7F7" d="M0 1l8 27-8 27z"></path></g></svg></div></div><div class="StyledComponents__DroppableContainer-sc-1y3cyd9-1 iIGwwp StyledComponents__Container-sc-1h424rp-0 fHRNoD"><div data-test="deals-list" class="StyledComponents__Container-xecf42-2 eLJKoe"><div class="StyledComponents__Column-xecf42-1 jaJNkW"><div data-test="stage-add-deal-button" class="StyledComponents__ButtonWrapper-xecf42-0 liHggd"><button class="cui4-button cui4-button--ghost"><svg class="cui4-icon cui4-icon--black-32"><use href="#icon-plus" xlink:href="#icon-plus"></use></svg></button></div></div></div></div></div><div data-test="stage-6" data-test-stage-index="5" class="StyledComponents__Container-sc-1y3cyd9-0 bnaBrH"><div class="StyledComponents__Container-sc-15bb88o-0 hFYByr"><div data-test="stage-header-6" class="StyledComponents__Details-sc-15bb88o-3 eouTCY"><div class="StyledComponents__StageOverview-sc-15bb88o-1 lofTbv"><div><div class="StyledComponents__Title-u0bxy2-0 hLQExW">Negotiations Started</div></div><div data-test="stage-summary" class="StyledComponents__Container-sc-94qnz-0 eQbMmA"><span>0&nbsp;€</span></div></div><svg class="arrow" width="16" height="56"><g fill="none" fill-rule="evenodd"><path class="arrow__right" fill="#F7F7F7" d="M0 0h16v56H0z"></path><path class="arrow__border" fill="#E5E5E5" d="M1 0l8 28-8 28H0V0z"></path><path class="arrow__left" fill="#F7F7F7" d="M0 1l8 27-8 27z"></path></g></svg></div></div><div class="StyledComponents__DroppableContainer-sc-1y3cyd9-1 iIGwwp StyledComponents__Container-sc-1h424rp-0 fHRNoD"><div data-test="deals-list" class="StyledComponents__Container-xecf42-2 eLJKoe"><div class="StyledComponents__Column-xecf42-1 jaJNkW"><div data-test="stage-add-deal-button" class="StyledComponents__ButtonWrapper-xecf42-0 liHggd"><button class="cui4-button cui4-button--ghost"><svg class="cui4-icon cui4-icon--black-32"><use href="#icon-plus" xlink:href="#icon-plus"></use></svg></button></div></div></div></div></div><div data-test="no-deals-content"><div class="StyledComponents__Middle-sc-1kktbus-4 StyledComponents__Wrap-sc-1kktbus-5 gWNPtS"><div class="StyledComponents__Title-sc-1kktbus-6 wDGgF">Noch keine Geschäfte hinzugefügt</div><p class="StyledComponents__Content-sc-1kktbus-7 eWRrHI"><a href="" data-test="empty-create-new-deal" data-actiontype="create-deal">Neuen Deal anlegen</a> oder <a href="">Daten importieren</a></p></div></div></div></div><div id="pipeline-view-deal-actions-popover"></div></div></div>

</div><div class="iam___Mount___2KNbG2KN"><div class="cui4-text"><div></div></div></div><div id="mainview254" class="viewContainer" style="display: none;"><div class="activityPageWrapper">
	
	<div class="activityPageWrapper__pageContent"><div id="pageContainer" class="listPage activitiesList">
	<div class="pageActions listView">
		<div class="viewSelectContainer">
			<div class="calendarSwitch">
				<div class="cui4-button-group">
					<a class="cui4-button list cui4-button--active" id="pipeButton-MofjE31b" data-text="Liste" href="">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-list" href="#icon-sm-list"></use></svg>
			
			
			
		</a>
					<a class="cui4-button timelineButton calendarLinkIcon" id="pipeButton-yC84VX10" data-text="Kalender" href="">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-calendar" href="#icon-sm-calendar"></use></svg>
			
			
			
		</a>
				</div>
			</div>

			<div class="toolbarContainer">
				<a class="cui4-button addActivityButton cui4-button--green" id="activitiesAddActivity" data-test="addButton-button" href="">
			
			
				<span class="">Aktivität hinzufügen</span>
			
			
			
		</a>
				<div class="schedulingButton"><div class="popover__container___1jrtf" style=""><div tabindex="-1"><div class="dropmenu__buttonWrapper___3qBmP"><div><div><button class="cui4-button">
	<svg class="cui4-icon"><use xlink:href="#icon-add-availability" href="#icon-add-availability"></use></svg>
	<span>Zeit vorschlagen</span>
</button></div><div><div class="cui4-text"></div></div></div></div></div></div></div>
				<div class="separator"></div>
				<div class="sendGroupEmail"></div>
				<div class="bulkDelete"></div>
			</div>
		</div>

		<span class="listSummaryContainer"><div class="listSummary list">
	<span class="text">
		
		
		<span data-test="list-summary">2 Aktivitäten</span>
	</span>
	<span class="listSummaryIcon">
		<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-help" href="#icon-help"></use></svg>
	</span>
</div></span>

		<div class="actionsAndFiltersContainer">
			<span class="activityIndicator"><div class="cui4-spinner cui4-spinner--undefined cui4-spinner--light"><div class="cui4-spinner__trail"></div></div></span>
			
				<div class="showHideBulkEdit"></div>
			
			<div class="filterMenuContainer"><div class="changeFilter"><button class="cui4-button" data-test="filter-menu-button"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-filter" xlink:href="#icon-sm-filter"></use></svg><span class="client-filters-menu-components-___styles__selectButtonName___2q1bo">Sixt</span><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-triangle-down" xlink:href="#icon-sm-triangle-down"></use></svg></button></div></div>
			
				<div class="additionalActions">
					<span class="input selectSettings">
		<a class="cui4-button" id="pipeButton-ujuGcB7m" data-test="selectSettings-button" href="">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-ellipsis" href="#icon-sm-ellipsis"></use></svg>
			
			
			
		</a>
	</span>
				</div>
			
		</div>
	</div>
	<div class="filtersContainer">
		<div class="types" data-test="type-quickfilter"><div data-coachmark="all-filters" data-test="activity-type-quickFilter" class="client-activity-filters-___styles__filters___1r5Gn" style="visibility: visible;"><ul class="client-activity-filters-___styles__filtersGroup___2X_Yi"><li class="client-activity-filters-___styles__button___bhSV1" data-test="activity-type-qucikFilter-undefined"><div class="client-activity-filters-___styles__label___3Tu8Y" style="max-width: 100%;">ALLE</div></li></ul><ul class="client-activity-filters-___styles__filtersGroup___2X_Yi"><li class="client-activity-filters-___styles__button___bhSV1 client-activity-filters-___styles__buttonIcon___1FB8s" data-test="activity-type-qucikFilter-call"><svg class="cui4-icon cui4-icon--s client-activity-filters-___styles__icon___2YXtL"><use href="#icon-sm-ac-call" xlink:href="#icon-sm-ac-call"></use></svg><div class="client-activity-filters-___styles__label___3Tu8Y" style="max-width: 100%;">Anruf</div></li><li class="client-activity-filters-___styles__button___bhSV1 client-activity-filters-___styles__buttonIcon___1FB8s" data-test="activity-type-qucikFilter-meeting"><svg class="cui4-icon cui4-icon--s client-activity-filters-___styles__icon___2YXtL"><use href="#icon-sm-ac-meeting" xlink:href="#icon-sm-ac-meeting"></use></svg><div class="client-activity-filters-___styles__label___3Tu8Y" style="max-width: 100%;">Meeting</div></li><li class="client-activity-filters-___styles__button___bhSV1 client-activity-filters-___styles__buttonIcon___1FB8s" data-test="activity-type-qucikFilter-task"><svg class="cui4-icon cui4-icon--s client-activity-filters-___styles__icon___2YXtL"><use href="#icon-sm-ac-task" xlink:href="#icon-sm-ac-task"></use></svg><div class="client-activity-filters-___styles__label___3Tu8Y" style="max-width: 100%;">Aufgabe</div></li><li class="client-activity-filters-___styles__button___bhSV1 client-activity-filters-___styles__buttonIcon___1FB8s" data-test="activity-type-qucikFilter-deadline"><svg class="cui4-icon cui4-icon--s client-activity-filters-___styles__icon___2YXtL"><use href="#icon-sm-ac-deadline" xlink:href="#icon-sm-ac-deadline"></use></svg><div class="client-activity-filters-___styles__label___3Tu8Y" style="max-width: 100%;">Frist</div></li><li class="client-activity-filters-___styles__button___bhSV1 client-activity-filters-___styles__buttonIcon___1FB8s" data-test="activity-type-qucikFilter-email"><svg class="cui4-icon cui4-icon--s client-activity-filters-___styles__icon___2YXtL"><use href="#icon-sm-ac-email" xlink:href="#icon-sm-ac-email"></use></svg><div class="client-activity-filters-___styles__label___3Tu8Y" style="max-width: 100%;">E-Mail</div></li><li class="client-activity-filters-___styles__button___bhSV1 client-activity-filters-___styles__buttonIcon___1FB8s" data-test="activity-type-qucikFilter-lunch"><svg class="cui4-icon cui4-icon--s client-activity-filters-___styles__icon___2YXtL"><use href="#icon-sm-ac-lunch" xlink:href="#icon-sm-ac-lunch"></use></svg><div class="client-activity-filters-___styles__label___3Tu8Y" style="max-width: 100%;">Mittagessen</div></li></ul></div><div class="client-activity-filters-___styles__activityFiltersTooltipsContainer___6pt7s" id="activity-filters-tooltips"></div></div>
		<div class="statuses" data-test="status-quickfilter"><div class="quickFilters">
	<div class="inlineFilters">
		
			
				
				
				
				<label class="widget-radio planned active" data-test="quick-filter-planned-button"><input type="radio" name="status" value="planned" checked="&quot;checked&quot;" data-test="quick-filter-planned-button">Geplant</label>
			
				
				
				
				<label class="widget-radio overdue" data-test="quick-filter-overdue-button"><input type="radio" name="status" value="overdue" data-test="quick-filter-overdue-button">Überfällig</label>
			
				
				
				
				<label class="widget-radio today" data-test="quick-filter-today-button"><input type="radio" name="status" value="today" data-test="quick-filter-today-button">Heute</label>
			
				
				
				
				<label class="widget-radio tomorrow" data-test="quick-filter-tomorrow-button"><input type="radio" name="status" value="tomorrow" data-test="quick-filter-tomorrow-button">Morgen</label>
			
				
				
				
				<label class="widget-radio thisWeek" data-test="quick-filter-thisWeek-button"><input type="radio" name="status" value="thisWeek" data-test="quick-filter-thisWeek-button">Diese Woche</label>
			
				
				
				
				<label class="widget-radio nextWeek" data-test="quick-filter-nextWeek-button"><input type="radio" name="status" value="nextWeek" data-test="quick-filter-nextWeek-button">Nächste Woche</label>
			
				
				
				
				<label class="widget-radio customTimeRange" data-test="quick-filter-customTimeRange-button"><input type="radio" name="status" value="customTimeRange" data-test="quick-filter-customTimeRange-button">Zeitraum auswählen</label>
			
		
	</div>
</div></div>
	</div>
	<div class="pageContent activityFilters">
		
			<div class="bulkEditContainer"></div>
		

		
			<div class="grid"><div class="grid__header"><div class="gridHeader__wrapper" style="max-width: 0px; border-right-width: 0px;">
	<div class="gridHeader gridHeader--fixed">
		<table>
			<thead>
				<tr class="gridHeader__row">
					
						<th class="gridHeader__cell gridHeader__cell--selectAll">
							<div class="gridHeader__item gridHeader__item--selectAll">
								<label class="cui4-checkbox gridHeader__input--selectAll">
		<input type="checkbox" name="check_1AAkyM2m" value="">
		<svg class="cui4-icon cui4-icon--s cui4-checkbox__checkmark"><use xlink:href="#icon-sm-check-done" href="#icon-sm-check-done"></use></svg>
		
	</label>
							</div>
						</th>
					
				</tr>
			</thead>
		</table>
	</div>
	<div class="gridHeader__columnPicker">
		<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-cogs" href="#icon-cogs"></use></svg>
	</div>
	<div class="gridHeader gridHeader--scrollable">
		<table class="gridHeader__table gridHeader__table--scrollable">
			<thead>
				<tr class="gridHeader__row">
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--enum" data-field="done" data-sortkey="done">
							<div class="resizeable__content">
								<div class="item gridHeader__item">
									<div class="resizeableContent__item">
										Erledigt
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 63px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--varchar" data-field="subject" data-sortkey="subject">
							<div class="resizeable__content">
								<div class="item gridHeader__item">
									<div class="resizeableContent__item">
										Betreff
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 304px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--deal" data-field="deal_id" data-sortkey="deal_id">
							<div class="resizeable__content">
								<div class="item gridHeader__item">
									<div class="resizeableContent__item">
										Deal
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 505px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--participants" data-field="person_id" data-sortkey="person_id">
							<div class="resizeable__content">
								<div class="item gridHeader__item" style="width:136px;">
									<div class="resizeableContent__item">
										Kontaktperson
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 658px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--email" data-field="person.email" data-sortkey="person.email">
							<div class="resizeable__content">
								<div class="item gridHeader__item" style="width:98px;">
									<div class="resizeableContent__item">
										
											<span class="resizeableContent__icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-person" href="#icon-person"></use></svg></span>
										E-Mail
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 773px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--phone" data-field="person.phone" data-sortkey="person.phone">
							<div class="resizeable__content">
								<div class="item gridHeader__item" style="width:147px;">
									<div class="resizeableContent__item">
										
											<span class="resizeableContent__icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-person" href="#icon-person"></use></svg></span>
										Telefon
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 937px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--organization" data-field="org_id" data-sortkey="org_id">
							<div class="resizeable__content">
								<div class="item gridHeader__item" style="width:112px;">
									<div class="resizeableContent__item">
										Organisation
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 1066px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--date" data-field="due_date" data-sortkey="due_date">
							<div class="resizeable__content">
								<div class="item gridHeader__item" style="width:115px;">
									<div class="resizeableContent__item">
										Fälligkeitstermin
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 1198px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--time" data-field="duration" data-sortkey="duration">
							<div class="resizeable__content">
								<div class="item gridHeader__item" style="width:55px;">
									<div class="resizeableContent__item">
										Dauer
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 1270px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
						<th class="gridHeader__cell gridHeader__cell--interactive  gridRow__cell--user" data-field="user_id" data-sortkey="user_id">
							<div class="resizeable__content">
								<div class="item gridHeader__item" style="width:169px;">
									<div class="resizeableContent__item">
										An Benutzer zugewiesen
										<div class="gridHeader__spinner">
											<div class="cui4-spinner cui4-spinner--s cui4-spinner--light"><div class="cui4-spinner__trail"></div></div>
										</div>
									</div>
								</div>
								<div class="reordering__handle"></div>
							</div>
							<div class="resizeable__handle" style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); left: 1456px;">
								<div class="resizeableHandle__bar"></div>
							</div>
						</th>
					
				</tr>
			</thead>
		</table><div class="tableSortable"><div class="ghostColumn"></div>
<div class="frostColumn"></div>
<div class="ghostColumnLine"></div></div>
	</div>
</div></div>
<div class="grid__content" style="max-width: 32px;">
	<div class="grid__content-wrapper">
		<div class="gridContent gridContent--fixed gridContent--react gridContent--selectionArea"><div class="gridContent__tableWrapper" style="width: 33px;"><table class="gridContent__table" style="background-image: linear-gradient(transparent 32px, rgb(224, 228, 231) 1px), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)); background-size: 100% 33px, 1px 33px; background-position: 0px 0px, 32px 0px; background-repeat: repeat-y;"><tbody style="height: 66px;"><tr class="gridRow gridRow--white" style="transform: translateY(0px);"><td class="gridRow__cell gridRow__cell--checkbox"><div class="item"><label class="cui4-checkbox"><input data-id="1" data-test="1" type="checkbox" value="false"><svg class="cui4-icon cui4-icon--s cui4-checkbox__checkmark"><use href="#icon-sm-check-done" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-sm-check-done"></use></svg></label></div></td></tr><tr class="gridRow gridRow--white" style="transform: translateY(33px);"><td class="gridRow__cell gridRow__cell--checkbox"><div class="item"><label class="cui4-checkbox"><input data-id="2" data-test="2" type="checkbox" value="false"><svg class="cui4-icon cui4-icon--s cui4-checkbox__checkmark"><use href="#icon-sm-check-done" xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-sm-check-done"></use></svg></label></div></td></tr></tbody></table></div></div>
		<div class="gridContent gridContent--scrollable gridContent--react gridContent--contentArea" style="left: -1px;"><div class="gridContent__tableWrapper" style="width: 1490px;"><table class="gridContent__table" style="background-image: linear-gradient(transparent 32px, rgb(224, 228, 231) 1px), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)), linear-gradient(to right, rgb(224, 228, 231), rgb(224, 228, 231)); background-size: 100% 33px, 1px 33px, 1px 33px, 1px 33px, 1px 33px, 1px 33px, 1px 33px, 1px 33px, 1px 33px, 1px 33px, 1px 33px; background-position: 0px 0px, 64px 0px, 305px 0px, 506px 0px, 659px 0px, 774px 0px, 938px 0px, 1067px 0px, 1199px 0px, 1271px 0px, 1457px 0px; background-repeat: repeat-y;"><tbody style="height: 66px;"><tr class="gridRow gridRow--red gridRow--white gridRow--first" style="transform: translateY(0px);"><td data-field="done" data-test="done" class="gridRow__cell gridRow__cell--enum"><div class="item read clearfix editable"><div data-test="done-label"><label class="cui4-checkbox cui4-checkbox--round"><input type="checkbox"><svg class="cui4-icon cui4-icon--s cui4-checkbox__checkmark"><use href="#icon-sm-check-done" xlink:href="#icon-sm-check-done"></use></svg></label></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="subject" data-test="subject" class="gridRow__cell gridRow__cell--varchar"><div class="item read clearfix editable"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value varchar valueWrap gridCell__item gridCell__item--link" data-test="subject-label"><span class="gridCell__typeIcon"><svg class="cui4-icon cui4-icon--s"><use xmlns:xlink="#icon-sm-ac-call" xlink:href="#icon-sm-ac-call" href="#icon-sm-ac-call"></use></svg></span><a href="">Eingehender Anruf</a></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="deal_id" data-test="deal_id" class="gridRow__cell gridRow__cell--deal"><div class="item read clearfix editable"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value deal valueWrap gridCell__item" data-test="deal_id-label"></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="person_id" data-test="person_id" class="gridRow__cell gridRow__cell--participants"><div class="item read clearfix editable" style="width: 136px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value participants valueWrap gridCell__item gridCell__item--set" data-test="participants-label"><a href=""><span class="gridCell__label gridCell__label--interactive">Brian Miculcy</span></a></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="person.email" data-test="person.email" class="gridRow__cell gridRow__cell--email"><div class="item read clearfix editable" style="width: 98px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value email valueWrap gridCell__item gridCell__item--set" data-test="email-label"></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="person.phone" data-test="person.phone" class="gridRow__cell gridRow__cell--phone"><div class="item read clearfix editable" style="width: 147px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value
			phone valueWrap gridCell__item gridCell__item--set gridCell__item--salesphone" data-test="phone-label"><a href="" class="gridCell__link"><span class="gridCell__label
								gridCell__label--noLabel gridCell__label--interactive">00491734709719</span><span class="gridCell__salesPhoneOptions"><svg class="cui4-icon cui4-icon--blue cui4-icon--s"><use href="#icon-sm-arrow-down" xlink:href="#icon-sm-arrow-down"></use></svg></span></a></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="org_id" data-test="org_id" class="gridRow__cell gridRow__cell--organization"><div class="item read clearfix editable" style="width: 112px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value organization valueWrap gridCell__item" data-test="org_id-label"></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="due_date" data-test="due_date" class="gridRow__cell gridRow__cell--date"><div class="item read clearfix editable" style="width: 115px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value date valueWrap gridCell__item" data-test="due_date-label">26. Juli  11:15</div><div class="gridCell__popoverContainer"></div></div></td><td data-field="duration" data-test="duration" class="gridRow__cell gridRow__cell--time"><div class="item read clearfix editable" style="width: 55px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value time valueWrap gridCell__item" data-test="duration-label">00:17</div><div class="gridCell__popoverContainer"></div></div></td><td data-field="user_id" data-test="user_id" class="gridRow__cell gridRow__cell--user"><div class="item read clearfix editable" style="width: 169px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value user valueWrap gridCell__item gridCell__item--link" data-test="user_id-label"><a href="">Sixt</a></div><div class="gridCell__popoverContainer"></div></div></td></tr><tr class="gridRow gridRow--red gridRow--white" style="transform: translateY(33px);"><td data-field="done" data-test="done" class="gridRow__cell gridRow__cell--enum"><div class="item read clearfix editable"><div data-test="done-label"><label class="cui4-checkbox cui4-checkbox--round"><input type="checkbox"><svg class="cui4-icon cui4-icon--s cui4-checkbox__checkmark"><use href="#icon-sm-check-done" xlink:href="#icon-sm-check-done"></use></svg></label></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="subject" data-test="subject" class="gridRow__cell gridRow__cell--varchar"><div class="item read clearfix editable"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value varchar valueWrap gridCell__item gridCell__item--link" data-test="subject-label"><span class="gridCell__typeIcon"><svg class="cui4-icon cui4-icon--s"><use xmlns:xlink="#icon-sm-ac-call" xlink:href="#icon-sm-ac-call" href="#icon-sm-ac-call"></use></svg></span><a href="">Eingehender Anruf</a></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="deal_id" data-test="deal_id" class="gridRow__cell gridRow__cell--deal"><div class="item read clearfix editable"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value deal valueWrap gridCell__item" data-test="deal_id-label"></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="person_id" data-test="person_id" class="gridRow__cell gridRow__cell--participants"><div class="item read clearfix editable" style="width: 136px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value participants valueWrap gridCell__item gridCell__item--set" data-test="participants-label"></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="person.email" data-test="person.email" class="gridRow__cell gridRow__cell--email"><div class="item read clearfix " style="width: 98px;"><div class="value email valueWrap gridCell__item" data-test="email-label"></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="person.phone" data-test="person.phone" class="gridRow__cell gridRow__cell--phone"><div class="item read clearfix " style="width: 147px;"><div class="value phone valueWrap gridCell__item" data-test="phone-label"></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="org_id" data-test="org_id" class="gridRow__cell gridRow__cell--organization"><div class="item read clearfix editable" style="width: 112px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value organization valueWrap gridCell__item" data-test="org_id-label"></div><div class="gridCell__popoverContainer"></div></div></td><td data-field="due_date" data-test="due_date" class="gridRow__cell gridRow__cell--date"><div class="item read clearfix editable" style="width: 115px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value date valueWrap gridCell__item" data-test="due_date-label">26. Juli  11:16</div><div class="gridCell__popoverContainer"></div></div></td><td data-field="duration" data-test="duration" class="gridRow__cell gridRow__cell--time"><div class="item read clearfix editable" style="width: 55px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value time valueWrap gridCell__item" data-test="duration-label">00:28</div><div class="gridCell__popoverContainer"></div></div></td><td data-field="user_id" data-test="user_id" class="gridRow__cell gridRow__cell--user"><div class="item read clearfix editable" style="width: 169px;"><button class="gridCell__editIcon cui4-button cui4-button--s " data-test="edit-field-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg></button><div class="value user valueWrap gridCell__item gridCell__item--link" data-test="user_id-label"><a href="">Sixt</a></div><div class="gridCell__popoverContainer"></div></div></td></tr></tbody></table></div></div>
	</div>
</div>
<div class="grid__ghostScrollbar" style="width: 0px;">
	<div class="ghostScrollbar__content" style="width: 32px;"></div>
</div></div>
		
	</div>
</div>
</div>
</div></div><div id="mainview276" class="viewContainer" style="display: none;">
	<div class="servicePage" style="height: 100%"><div class="csd-App"><div class="csd-Layout cui4-text" data-loading="false"><div class="csd-Header"><div class="csd-Header__title"><div class="cui4-button-group"><div class="csd-DashboardSelectContainer"><span class="csd-DashboardSelectContainer csd-DashboardSelectContainer__PopoverTrigger"><div class="csd-HeaderTitle"><div class="csd-HeaderTitleWrap" id="selectDashboard"><button class="cui4-button" title="Dashboard"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-dashboard" xlink:href="#icon-sm-dashboard"></use></svg><span>Dashboard</span><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-triangle-down" xlink:href="#icon-sm-triangle-down"></use></svg></button></div></div></span></div><button class="cui4-button csd-EditButton" id="editDashboard"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-pencil" xlink:href="#icon-sm-pencil"></use></svg></button></div><div class="csd-extraActionButtons"><button class="cui4-button fullscreenButton"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-fullscreen" xlink:href="#icon-sm-fullscreen"></use></svg></button></div></div><div class="csd-Header__actionButtons"><div><div class="csd-ChangeTimePeriod"><button class="cui4-button csd-DashboardFilterButton"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-calendar" xlink:href="#icon-sm-calendar"></use></svg><span>Diesen Monat</span><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-triangle-down" xlink:href="#icon-sm-triangle-down"></use></svg></button></div><button class="cui4-button csd-DashboardFilterButton"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-pipeline" xlink:href="#icon-sm-pipeline"></use></svg><span>Pipeline</span><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-triangle-down" xlink:href="#icon-sm-triangle-down"></use></svg></button><button class="cui4-button" data-test="filter-menu-button"><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-filter" xlink:href="#icon-sm-filter"></use></svg><span class="client-filters-menu-components-___styles__selectButtonName___2q1bo">Alle</span><svg class="cui4-icon cui4-icon--s"><use href="#icon-sm-triangle-down" xlink:href="#icon-sm-triangle-down"></use></svg></button><div data-coachmark="iamcoachmark-filters-menu-container"></div></div></div></div><div class="cui4-message cui4-message--visible cui4-message--alternative csd-InsightsMsg" style="height: 0px;"><div class="cui4-message__inner"><div class="cui4-message__content-wrap"><div class="cui4-message__content"><span>Not quite what you need? Create a fully customizable dashboard in <a href="">Insights (beta)</a></span></div></div><button class="cui4-button cui4-button--ghost cui4-button--s cui4-message__close"><svg class="cui4-icon cui4-icon--black cui4-icon--s"><use href="#icon-sm-cross" xlink:href="#icon-sm-cross"></use></svg></button></div></div><div class="csd-Columns csd-Columns--withGoalsMessage"><div class="csd-Column"><div class="csd-Block csd-DealSummaryBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Gestartete Deals</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a><div class="AddGoalModalWrapper"><button class="cui4-button add-goal" data-test="add-goal-button"><svg class="cui4-icon cui4-icon--black cui4-icon--s"><use href="#icon-sm-plus" xlink:href="#icon-sm-plus"></use></svg><span>Ziel hinzufügen</span></button></div></div><div><div class="csd-BlockRow" data-size="large"><span class="csd-BlockRow__value" data-color="blue">0</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div><div class="csd-BlockRow"><span class="csd-BlockRow__value">0&nbsp;€</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div></div></div></div></div><div class="csd-Block csd-ActivitiesBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Hinzugefügte Aktivitäten</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a><div class="AddGoalModalWrapper"><button class="cui4-button add-goal" data-test="add-goal-button"><svg class="cui4-icon cui4-icon--black cui4-icon--s"><use href="#icon-sm-plus" xlink:href="#icon-sm-plus"></use></svg><span>Ziel hinzufügen</span></button></div></div><div class="csd-Block__Error cui4-Text">Keine Daten für den ausgewählten Zeitraum gefunden.</div></div></div></div><div class="csd-Block csd-ActivitiesBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Abgeschlossene Aktivitäten</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a><div class="AddGoalModalWrapper"><button class="cui4-button add-goal" data-test="add-goal-button"><svg class="cui4-icon cui4-icon--black cui4-icon--s"><use href="#icon-sm-plus" xlink:href="#icon-sm-plus"></use></svg><span>Ziel hinzufügen</span></button></div></div><div class="csd-Block__Error cui4-Text">Keine Daten für den ausgewählten Zeitraum gefunden.</div></div></div></div><div class="csd-Block csd-DealProgressStagesBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Deals Fortschritt nach Anzahl</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a><div class="AddGoalModalWrapper"><button class="cui4-button add-goal" data-test="add-goal-button"><svg class="cui4-icon cui4-icon--black cui4-icon--s"><use href="#icon-sm-plus" xlink:href="#icon-sm-plus"></use></svg><span>Ziel hinzufügen</span></button></div></div><div class="csd-Block__Error cui4-Text">Keine Daten für den ausgewählten Zeitraum gefunden.</div></div></div></div></div><div class="csd-Column"><div class="csd-Block csd-DealSummaryBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Verlorene Deals</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a></div><div><div class="csd-BlockRow" data-size="large"><span class="csd-BlockRow__value" data-color="red">0</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div><div class="csd-BlockRow"><span class="csd-BlockRow__value">0&nbsp;€</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div></div></div></div></div><div class="csd-Block csd-EmailsBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Gesendete E-Mails</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a></div><div><div class="csd-BlockRow"><span class="csd-BlockRow__value">0</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div><div class="csd-BlockSeparator"><div class="csd-BlockSeparator__Content"><a class="expandButton" href="" draggable="false">Details schließen</a></div></div><div class="details" data-open="true"><div class="csd-BlockRow" data-size="small"><span class="csd-BlockRow__value">0 Mit Kontakten verknüpft</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div><div class="csd-BlockRow" data-size="small"><span class="csd-BlockRow__value">0 Mit Deals verknüpft</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div><div class="csd-BlockRow" data-size="small"><span class="csd-BlockRow__value">0 Geteilt</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div></div></div></div></div></div><div class="csd-Block csd-EmailsBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Erhaltene E-Mails</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a></div><div><div class="csd-BlockRow"><span class="csd-BlockRow__value">0</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div><div class="csd-BlockSeparator"><div class="csd-BlockSeparator__Content"><a class="expandButton" href="" draggable="false">Details schließen</a></div></div><div class="details" data-open="true"><div class="csd-BlockRow" data-size="small"><span class="csd-BlockRow__value">0 Mit Kontakten verknüpft</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div><div class="csd-BlockRow" data-size="small"><span class="csd-BlockRow__value">0 Mit Deals verknüpft</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div><div class="csd-BlockRow" data-size="small"><span class="csd-BlockRow__value">0 Geteilt</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div></div></div></div></div></div><div class="csd-Block csd-DealSummaryUsersBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Meiste Deals gestartet von</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a></div><div class="csd-Block__Error cui4-Text">Keine Daten für den ausgewählten Zeitraum gefunden.</div></div></div></div><div class="csd-Block csd-DealProgressStagesBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Deals Fortschritt nach Wert</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a><div class="AddGoalModalWrapper"><button class="cui4-button add-goal" data-test="add-goal-button"><svg class="cui4-icon cui4-icon--black cui4-icon--s"><use href="#icon-sm-plus" xlink:href="#icon-sm-plus"></use></svg><span>Ziel hinzufügen</span></button></div></div><div class="csd-Block__Error cui4-Text">Keine Daten für den ausgewählten Zeitraum gefunden.</div></div></div></div></div><div class="csd-Column"><div class="csd-Block csd-DealSummaryBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Gewonnene Deals</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a><div class="AddGoalModalWrapper"><button class="cui4-button add-goal" data-test="add-goal-button"><svg class="cui4-icon cui4-icon--black cui4-icon--s"><use href="#icon-sm-plus" xlink:href="#icon-sm-plus"></use></svg><span>Ziel hinzufügen</span></button></div></div><div><div class="csd-BlockRow" data-size="large"><span class="csd-BlockRow__value" data-color="green">0</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div><div class="csd-BlockRow"><span class="csd-BlockRow__value">0&nbsp;€</span><div class="cui4-trend"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s cui4-trend__icon"><use href="#icon-sm-triangle-left" xlink:href="#icon-sm-triangle-left"></use></svg></div></div></div></div></div></div><div class="csd-Block csd-DealSummaryUsersBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Meiste Deals gewonnen von</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a></div><div class="csd-Block__Error cui4-Text">Keine Daten für den ausgewählten Zeitraum gefunden.</div></div></div></div><div class="csd-Block csd-RevenueForecastBlock csd-RevenueForecastBlock__Teaser"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header csd-Block__Header--Clickable"><a class="cui4-Text" href="" draggable="false"><span><h3 class="cui4-Text">Kumulative Umsatzprognose</h3></span><svg class="cui4-icon cui4-icon--black-24 cui4-icon--s" draggable="false"><use href="#icon-sm-arrow-right" xlink:href="#icon-sm-arrow-right"></use></svg></a></div><section class="csd-RevenueForecastTeaser"><div class="content">Das große Ganze: visualisieren Sie Ihre zukünftigen Ergebnisse, passen Sie Ihren Kurs an und erreichen Sie Ihre Ziele.</div><div class="actions"><a class="action-item" href="">Verwerfen</a><a class="action-item" href="">Mehr erfahren</a></div></section></div></div></div><div class="csd-Block csd-PhoneCallsBlock"><div class="cui4-panel"><div class="cui4-spacing cui4-spacing--top-m cui4-spacing--right-m cui4-spacing--bottom-m cui4-spacing--left-m"><div class="csd-Block__Header"><h3 class="cui4-Text">Calling insights</h3></div><div class="csd-Block__Error cui4-Text">Keine Daten für den ausgewählten Zeitraum gefunden.</div></div></div></div></div></div></div></div></div>

</div><div id="mainview279" class="viewContainer" style="display: block;"><div class="detailViewWrapper">
	<div class="detailView personDetails">
		<div class="infoBlock"><div class="content"><div class="contact icon pictureUpload"><div class="mask"><svg class="cui4-icon cui4-icon--blue"><use xlink:href="#icon-person" href="#icon-person"></use></svg></div></div><h1><a class="editable">Max Müller</a></h1><div class="label-component"><div class="_1Y0bm83r1Tgjq4WDFqvrEF"><div class="" data-test="labels-dropmenu"><button class="cui4-button cui4-button--ghost cui4-button--s"><svg class="cui4-icon cui4-icon--black cui4-icon--s"><use href="#icon-sm-ac-pricetag" xlink:href="#icon-sm-ac-pricetag"></use></svg></button></div></div></div><div class="spacer"></div><div class="actions-outer"><div class="actions"><div class="ownerView"><div class="owner">
	
		<a class="link" href="">
			<div class="image" style="background-image: url('./images/logo.webp');"></div>
			<div class="info">
				<span class="name">Sixt</span>
				<span class="role">Besitzer</span>
			</div>
		</a>
	
	<span class="input transferOwner">
		<a class="cui4-button cui4-button--ghost cui4-button--s" id="pipeButton-GMZuqffj" data-test="transferOwner-button" href="">
			
			
			
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-triangle-down" href="#icon-sm-triangle-down"></use></svg>
		</a>
	</span>
</div></div><span class="input buttonAddDeal">
		<button class="cui4-button cui4-button--green" id="pipeButton-o0jOuylF" data-test="buttonAddDeal-button">
			
			
				<span class="">Neuen Deal hinzufügen</span>
			
			
			
		</button>
	</span><div class="fieldsView selectVisibility"><div class="item read">
	

	<div class="valueWrap clearfix visible_to permissionsSecondRegular">
		<span class="input">
		<button class="cui4-button visibility-select noHover" id="pipeButton-bQt4PHXm" data-test="visible_to-label" data-type="" data-visibility-id="3" form="noFormID">
			
			
			
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-triangle-down" href="#icon-sm-triangle-down"></use></svg>
		</button>
	</span>
	</div>
</div></div><span class="input selectSettings">
		<button class="cui4-button" id="pipeButton-0RtjD0RB" data-coachmark="marketplace-extensions">
			
			
			
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-ellipsis" href="#icon-sm-ellipsis"></use></svg>
		</button>
	</span></div></div></div></div>

		<div class="mainBlock">
			<div class="sidebar"><div class="important-fields client-pages-DetailsPage-___DetailsPage__sticky___3rHwD"><div class="client-pages-DetailsPage-___DetailsPage__importantFields___3pH5Z"></div></div>
<div class="appExtensions"></div>
<div data-state="read" class="widget personFields fieldsView"><div class="columnTitle"><span class="columnItem">Details</span><div class="columnActions"><button class="cui4-button editAll cui4-button--s" id="pipeButton-H2sMPSZd" data-test="edit-all" data-tooltip="Edit all fields">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg>
			
			
			
		</button><button class="cui4-button customFields cui4-button--s" id="pipeButton-G2nlkaFp" data-test="customize-fields">
			
			
				<span class="">Felder anpassen</span>
			
			
			
		</button></div></div><div class="fieldsList read collapsed"><div class="visible" data-field-key="phone"><div class="item read
	phoneField editable
	"><div class="labelWrap clearfix"><span class="label">Telefon<div><div class="cui4-text"></div></div></span></div><div><div class="valueWrap singleRow clearfix phoneGroup salesPhone"><span class="phoneNumber"><span class="value"><?php if(!empty($caller)): ?><a href="tel:<?= $caller ?>" data-test="phone-label"><?= $caller ?></a><?php endif; ?></span><span class="valueRemark"><span class="label"></span></span></span><button class="salesPhoneOptions"><svg class="cui4-icon cui4-icon--blue cui4-icon--s"><use xlink:href="#icon-sm-arrow-down" href="#icon-sm-arrow-down"></use></svg></button></div></div><span class="input buttonEdit action edit" title="Bearbeiten">
		<button class="cui4-button cui4-button--s" id="pipeButton-O5LXuuMV" data-test="phone-edit">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-pencil" href="#icon-sm-pencil"></use></svg>
			
			
			
		</button>
	</span></div></div><div class="visible" data-field-key="email"><div class="item read
	emailField editable
	"><div class="labelWrap clearfix"><span class="label">E-Mail</span></div><span class="addValue"><a class="cui4-text buttonEdit buttonEdit_addValue action edit" data-test="email-add">+ Wert hinzufügen</a></span></div></div></div><div class="itemFooter">
	<div class="servicePage" style="height: 100%"><div><section class="sdContainer"><div class="cui4-text"><div class="sdContainer--upsell"><div class="sdHeader"><span class="sdBadgeContainer"><p class="sdContainer--title">Smart Contact Data Info</p><div class="cui4-badge cui4-badge--tier-gold cui4-badge--outline promoter--gold-badge"><div class="cui4-badge__label">Advanced</div></div></span><button class="cui4-button cui4-button--ghost cui4-button--s"><span>Mehr anzeigen</span></button></div><div class="details--panel-hidden"><div class="sdContainer--promoter"><p><span class="break-it">Sie sind es leid, im Internet nach Ihren Kunden zu suchen, um diese kennenzulernen? Aktivieren Sie Smart</span>Kontaktdaten, um sofort wertvolle Daten zu diesem Kontakt abzurufen.</p></div><div class="sdContainer--loadButton"><button class="cui4-button cui4-button--green cui4-button--s" data-testid="button"><span>Upgrade auf Advanced</span></button><button class="cui4-button cui4-button--ghost-alternative cui4-button--s sdContainer--dismissButton"><span>Verwerfen</span></button></div></div></div></div></section></div></div>

</div></div><div class="widget organizationFields fieldsView">
	<div class="columnTitle">
		<span class="columnItem">Organisation</span>
	</div>
	<div class="linkObject">
		<p>
			
				Mit diesem Kontakt ist keine Organisation verknüpft.
			
		</p>
		<a class="cui4-text" href="">+ Eine Organisation verknüpfen</a>
	</div>

</div><div class="widget dealsOverview">
	<div class="columnTitle">
		<span class="columnItem">Deals</span>
		<div class="columnActions">
			<a class="cui4-button selectSettingsButton addNew cui4-button--s" id="pipeButton-zrquNLlh" data-type="deals" href="">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-plus" href="#icon-sm-plus"></use></svg>
			
			
			
		</a>
		</div>
	</div>

	<div class="addObject">
		<p>Dieser Kontakt weist keine zugehörigen Deals auf.</p>
		<a href="" class="cui4-text addNew" data-type="deal">+ Neuen Deal hinzufügen</a>
	</div>
</div><div class="widget detailedOverview"><div class="columnTitle">
	<span class="columnItem">Überblick</span>
</div>

<div class="charts">
	<div class="orange typesChart"><div class="barChart orange">
	<h3 class="chartTitle">
		Top-Aktivitäten
		
	</h3>
	
		<div class="bars">
			
					<div class="bar" data-key="0" style="width: 446px">
						<div class="barContent"></div>
					</div>
				
		</div>
	

	<table class="legend">
		<tbody>
			
				<tr class="row" data-key="0">
					
						<td class="col">Anruf</td>
					
						<td class="col">1</td>
					
						<td class="col">100%</td>
					
				</tr>
			
		</tbody>
	</table>
</div></div>
	<div class="blue usersChart"><div class="barChart blue">
	<h3 class="chartTitle">
		Aktivste Nutzer
		
	</h3>
	
		<div class="bars">
			
					<div class="bar" data-key="0" style="width: 446px">
						<div class="barContent"></div>
					</div>
				
		</div>
	

	<table class="legend">
		<tbody>
			
				<tr class="row" data-key="0">
					
						<td class="col">Sixt</td>
					
						<td class="col">122</td>
					
						<td class="col">100%</td>
					
				</tr>
			
		</tbody>
	</table>
</div></div>
</div>

<ul>
	<li class="inactive">Inaktiv (Tage) <span>21</span></li>
	<li>Erstellt <span>26. Juli 2019</span></li>
</ul></div><div class="widget personsList followers"><div class="columnTitle">
	
		<span class="columnItem">Follower (122)</span>
	
	
		<div class="columnActions">
			<a class="cui4-button selectSettingsButton addNew cui4-button--s" id="pipeButton-PQnhEUHD" data-type="followers" data-tooltip="Einstellungen" href="">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-plus" href="#icon-sm-plus"></use></svg>
			
			
			
		</a>
		</div>
	
</div><ul class="listContainer"><li class="listItem" data-cid="c294"><span class="person"><svg class="cui4-icon cui4-icon--black-64 cui4-icon--s"><use xlink:href="#icon-sm-person" href="#icon-sm-person"></use></svg></span>&nbsp;

	<a href="">
		Sixt
		
	</a>
</li></ul><div class="actions inputsGroup"><span class="input">
		<button class="cui4-button cui4-button--s" id="pipeButton-GqAEfBKA" data-action="viewPersons">
			
			
				<span class="">Alle anzeigen</span>
			
			
			
		</button>
	</span><span class="input">
		<button class="cui4-button cui4-button--s" id="pipeButton-PCAyOQlU" data-action="stopFollowing">
			
			
				<span class="">Nicht mehr folgen</span>
			
			
			
		</button>
	</span></div>

</div><div class="widget forwarderAddresses"><div class="columnTitle"><span class="columnItem">E-Mail BCC</span></div><div class="title">Universaladresse<span class="questionTooltip" data-tooltip="Verwenden Sie bei all Ihren E-Mails die Universal-BCC-Adresse Ihres Unternehmens. Pipedrive kann dann feststellen, womit diese E-Mails zu verknüpfen sind."><svg class="cui4-icon cui4-icon--black-88 cui4-icon--s"><use xlink:href="#icon-sm-help" href="#icon-sm-help"></use></svg></span></div><input class="emailField" type="text" value="" data-tooltip-hover="Click to copy" data-tooltip-click="Copied to clipboard" readonly=""></div>
</div>

			<div class="content">
				<div class="flowWrapper" style="min-height: auto;"><div class="pinnedNotes"></div>
<div data-test="flow-header" class="flowHeader">
	<div class="flowCompose cui4-panel cui4-panel--no-border cui4-panel--elevation-02 cui4-panel--radius-s"><div class="tabsWrapper open">
		<div class="tabs">
<ul class="headers">
	
		<li style="" class="hasIcon active">
			<a href="" data-target="note" data-test="">
				
					<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-note" href="#icon-sm-note"></use></svg>
				

				<span class="headers__tab__title">Notizen</span>
			</a>
		</li>
	
		<li style="" class="hasIcon">
			<a href="" data-target="activity" data-test="add-activity-tab">
				
					<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-calendar" href="#icon-sm-calendar"></use></svg>
				

				<span class="headers__tab__title">Aktivität</span>
			</a>
		</li><div class="hasIcon schedule-tab"><div class="popover__container___1jrtf"><div tabindex="-1"><div class="dropmenu__buttonWrapper___3qBmP"><div><div><a class="scheduleButton-flow" href="javascript:">
	<svg class="cui4-icon"><use xlink:href="#icon-add-availability" href="#icon-add-availability"></use></svg>
	Zeit vorschlagen
</a></div></div></div></div></div></div>
	
		<li style="" class="hasIcon">
			<a href="" data-target="email" data-test="send-email-tab">
				
					<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-email" href="#icon-sm-email"></use></svg>
				

				<span class="headers__tab__title">E-Mail</span>
			</a>
		</li>
	
		<li style="" class="hasIcon">
			<a href="" data-target="file" data-test="">
				
					<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-file" href="#icon-sm-file"></use></svg>
				

				<span class="headers__tab__title">Dateien</span>
			</a>
		</li>
	
</ul>

<div class="content">
	<div class="spinnerOverlay">
		<span class="spinnerWrapper"><div class="cui4-spinner cui4-spinner--undefined cui4-spinner--light"><div class="cui4-spinner__trail"></div></div></span>
	</div>
	
		<div class="tabContent active" data-tab="note"><div class="flowComponentEditor note">
	<div class="richTextArea">
		<div class="bodyEditor defaultText" contenteditable="true" data-default=""></div>
		<div class="editorToolbar">
			<div class="buttons">
				<a href="" class="toolbar_bold editor-tooltip" data-editor-tooltip="Fett (Ctrl B)"><svg class="cui4-icon"><use xlink:href="#icon-bold" href="#icon-bold"></use></svg></a>
				<a href="" class="toolbar_italic editor-tooltip" data-editor-tooltip="Kursiv (Ctrl I)"><svg class="cui4-icon"><use xlink:href="#icon-italic" href="#icon-italic"></use></svg></a>
				<a href="" class="toolbar_underline editor-tooltip" data-editor-tooltip="Unterstreichen (Ctrl U)"><svg class="cui4-icon"><use xlink:href="#icon-underline" href="#icon-underline"></use></svg></a>
				<a href="" class="toolbar_link editor-tooltip" data-editor-tooltip="Verknüpfen (Ctrl K)"><svg class="cui4-icon"><use xlink:href="#icon-link" href="#icon-link"></use></svg></a>
				
			</div>

			<div class="buttons">
				<a href="" class="toolbar_ul editor-tooltip" data-editor-tooltip="Ungeordnete Liste (Ctrl⇧8)"><svg class="cui4-icon"><use xlink:href="#icon-list-bulleted" href="#icon-list-bulleted"></use></svg></a>
				<a href="" class="toolbar_ol editor-tooltip" data-editor-tooltip="Geordnete Liste (Ctrl⇧7)"><svg class="cui4-icon"><use xlink:href="#icon-list-numbered" href="#icon-list-numbered"></use></svg></a>
			</div>

			<div class="buttons">
				<a href="" class="toolbar_remove editor-tooltip" data-editor-tooltip="Stil entfernen (Ctrl \)"><svg class="cui4-icon"><use xlink:href="#icon-clearformat" href="#icon-clearformat"></use></svg></a>
			</div>
			<div class="actions">
				<span class="input">
		<button class="cui4-button cui4-button--s" id="pipeButton-6XnpDdxS" data-action="cancel">
			
			
				<span class="">Abbrechen</span>
			
			
			
		</button>
	</span>
				<span class="input">
		<button class="cui4-button cui4-button--green cui4-button--s" id="pipeButton-pTQZFgWZ" data-action="save">
			
			
				<span class="">Speichern</span>
			
			
			
		</button>
	</span>
			</div>
		</div>
	</div>
</div></div>
	
		<div class="tabContent" data-tab="activity"><div class="flowComponentEditor activity">
	<div class="editView flowActivity"><div id="iamCoachmark--gcalSyncPromo1-placeholder"></div>
<div class="activityEditor__agenda" style="height:539px;">
	<div class="activityEditor__navigation"><div class="agenda__date">Freitag, August 16</div>
<div class="agenda__nav">
	<div class="cui4-button-group">
		<a class="cui4-button previous cui4-button--s" id="pipeButton-6YSDp4lD" data-title="Voriger Tag" href="">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-arrow-left" href="#icon-sm-arrow-left"></use></svg>
			
			
			
		</a>
		<a class="cui4-button next cui4-button--s" id="pipeButton-Jja71V57" data-title="Nächster Tag" href="">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-arrow-right" href="#icon-sm-arrow-right"></use></svg>
			
			
			
		</a>
	</div>
</div></div>
	<div class="activityEditor__calendar"><div class="_calendar__calendar___2k-Bw"><div class="_grid-allday__calendarAllday___3kLEE" style="width: 302px;"><div class="_grid-allday__calendarAlldayBackground___2a8JA" style="width: 302px;"><div class="_grid-allday__calendarAlldayLeftAside___2Z9zO"></div><div class="_grid-allday__allday___BO2kg" data-calendar-item-drop-area="allday"><div class="_grid-allday__day___lOI9P"><div class="_grid-allday__placeholder___1nsUz"><span class="_grid-allday__placeholderContent___M9Zoz">Click to add</span></div></div></div></div><div class="_grid-allday__calendarAlldayActivitiesWrapper___2yLfq" data-calendar-item-drop-area="allday" style="height: 26px; overflow-y: visible;"><div class="_grid-allday__calendarAlldayActivitiesInner___1Eajs"><div class="_draggable-item__draggableItem___2rlAK"><div class="_allday-item__alldayItem___3kOKk _allday-item__color--dark-blue___1oCTn _allday-item__ignoreIntersection___2vXVD" test-id="allday-item" style="top: 0px; left: calc(0%); width: calc(100%);"><div class="_allday-item__content___2J9b2"><div class="_allday-item__asideLeft___2Vm7y"><svg class="cui4-icon cui4-icon--white cui4-icon--s"><use href="#icon-sm-ac-call" xlink:href="#icon-sm-ac-call"></use></svg></div><div class="_allday-item__subject___2Dhym">Anruf</div><span class="_allday-item__asideRight___1SraQ"></span></div></div></div><div style="position: absolute; top: 8px; width: 1px; height: 26px;"></div></div></div></div><div class="_calendar__grid___39YHM"><div class="_calendar__hourLabelsWrapper___xrdkC"><div class="_calendar__hourLabel___10piW" style="top: 12px;">00:00</div><div class="_calendar__hourLabel___10piW" style="top: 60px;">01:00</div><div class="_calendar__hourLabel___10piW" style="top: 108px;">02:00</div><div class="_calendar__hourLabel___10piW" style="top: 156px;">03:00</div><div class="_calendar__hourLabel___10piW" style="top: 204px;">04:00</div><div class="_calendar__hourLabel___10piW" style="top: 252px;">05:00</div><div class="_calendar__hourLabel___10piW" style="top: 300px;">06:00</div><div class="_calendar__hourLabel___10piW" style="top: 348px;">07:00</div><div class="_calendar__hourLabel___10piW" style="top: 396px;">08:00</div><div class="_calendar__hourLabel___10piW" style="top: 444px;">09:00</div><div class="_calendar__hourLabel___10piW" style="top: 492px;">10:00</div><div class="_calendar__hourLabel___10piW" style="top: 540px;">11:00</div><div class="_calendar__hourLabel___10piW" style="top: 588px;">12:00</div><div class="_calendar__hourLabel___10piW" style="top: 636px;">13:00</div><div class="_calendar__hourLabel___10piW" style="top: 684px;">14:00</div><div class="_calendar__hourLabel___10piW" style="top: 732px;">15:00</div><div class="_calendar__hourLabel___10piW" style="top: 780px;">16:00</div><div class="_calendar__hourLabel___10piW" style="top: 828px;">17:00</div><div class="_calendar__hourLabel___10piW" style="top: 876px;">18:00</div><div class="_calendar__hourLabel___10piW" style="top: 924px;">19:00</div><div class="_calendar__hourLabel___10piW" style="top: 972px;">20:00</div><div class="_calendar__hourLabel___10piW" style="top: 1020px;">21:00</div><div class="_calendar__hourLabel___10piW" style="top: 1068px;">22:00</div><div class="_calendar__hourLabel___10piW" style="top: 1116px;">23:00</div></div><div class="_current-time-indicator__currentTimeIndicator___Y4Mwo" style="top: 700px;"><div class="_current-time-indicator__time___1hCsT">14:35</div><div class="_current-time-indicator__dot___fK0im"></div><div class="_current-time-indicator__line___6cxKf"></div></div><div class="_calendar__daysWrapper___15GMN" data-calendar-item-drop-area="grid"><div class="_calendar__mouseEvents___Yvka1"><div style="position: absolute; top: 0px; left: 0px; right: 0px; bottom: 0px;"></div></div><div class="_grid-day__day___Tm03H"><div class="_grid-day__activitiesWrapper___3mRPG"></div></div></div></div></div></div>
</div>
<div class="activityEditor__form" data-test="add-activity-form" style="height:540px;"><div class="contentWrapper">
	<form>
		<div class="types responsiveRadioList"><label class="widget-radio active" data-title="Anruf"><input type="radio" name="type" value="call" checked="&quot;checked&quot;" data-icon="call" data-title="Anruf"><span class="widget-radio_icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-ac-call" href="#icon-sm-ac-call"></use></svg></span><span class="widget-radio_label">Anruf</span></label><label class="widget-radio" data-title="Meeting"><input type="radio" name="type" value="meeting" data-icon="meeting" data-title="Meeting"><span class="widget-radio_icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-ac-meeting" href="#icon-sm-ac-meeting"></use></svg></span><span class="widget-radio_label">Meeting</span></label><label class="widget-radio" data-title="Aufgabe"><input type="radio" name="type" value="task" data-icon="task" data-title="Aufgabe"><span class="widget-radio_icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-ac-task" href="#icon-sm-ac-task"></use></svg></span><span class="widget-radio_label">Aufgabe</span></label><label class="widget-radio" data-title="Frist"><input type="radio" name="type" value="deadline" data-icon="deadline" data-title="Frist"><span class="widget-radio_icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-ac-deadline" href="#icon-sm-ac-deadline"></use></svg></span><span class="widget-radio_label">Frist</span></label><label class="widget-radio" data-title="E-Mail"><input type="radio" name="type" value="email" data-icon="email" data-title="E-Mail"><span class="widget-radio_icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-ac-email" href="#icon-sm-ac-email"></use></svg></span><span class="widget-radio_label">E-Mail</span></label><label class="widget-radio" data-title="Mittagessen"><input type="radio" name="type" value="lunch" data-icon="lunch" data-title="Mittagessen"><span class="widget-radio_icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-ac-lunch" href="#icon-sm-ac-lunch"></use></svg></span><span class="widget-radio_label">Mittagessen</span></label><span class="input activityTypesSelect"><div class="select2-container singleselect" id="s2id_select-x7jIOOXh"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-7"><span class="select2-type-icon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-ac-call" href="#icon-ac-call"></use></svg></span></span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen7" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-7" id="s2id_autogen7"><div class="select2-drop select2-display-none">   <div class="select2-search select2-search-hidden select2-offscreen">       <label for="s2id_autogen7_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-7" id="s2id_autogen7_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-7">   </ul></div></div><select name="" id="select-x7jIOOXh" placeholder="" class="singleselect select2-offscreen" tabindex="-1" title="">
		
			
				<option value="call" selected="selected" data-icon="call" data-title="Anruf">
					Anruf
				</option>
			
		
			
				<option value="meeting" data-icon="meeting" data-title="Meeting">
					Meeting
				</option>
			
		
			
				<option value="task" data-icon="task" data-title="Aufgabe">
					Aufgabe
				</option>
			
		
			
				<option value="deadline" data-icon="deadline" data-title="Frist">
					Frist
				</option>
			
		
			
				<option value="email" data-icon="email" data-title="E-Mail">
					E-Mail
				</option>
			
		
			
				<option value="lunch" data-icon="lunch" data-title="Mittagessen">
					Mittagessen
				</option>
			
		
	</select>
	
</span></div>
		<div id="activityTitleContainer">
			<input type="text" value="" name="subject" title="Titel" placeholder="Anruf" class="activityTitle" data-test="activity-subject">
		</div>

		<div class="additionalOptions">
			<label class="contentWrapper__label">
				Datum
				<br>
				<span class="input hasClear"><input type="text" name="due_date" data-test="due_date" value="16.08.2019" id="date-iiNwANdG" class="" placeholder="16.08.2019" autocomplete="off"><span class="clear" id="clear-date-iiNwANdG"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s"><use xlink:href="#icon-sm-cross" href="#icon-sm-cross"></use></svg></span></span>
			</label>
			<label class="contentWrapper__label">
				Zeit
				<br>
				<span class="input hasClear"><input type="text" name="due_time" data-test="due_time" value="" id="time-eN4IjTSs" class="time single" placeholder="" autocomplete="OFF"><span class="clear" id="clear-time-eN4IjTSs"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s"><use xlink:href="#icon-sm-cross" href="#icon-sm-cross"></use></svg></span></span>
			</label>
			<label class="contentWrapper__label">
				Dauer
				<br>
				<span class="input hasClear"><input type="text" name="duration" data-test="duration" value="" id="time-T7zcMz2V" class="time single" placeholder="" autocomplete="OFF"><span class="clear" id="clear-time-T7zcMz2V"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s"><use xlink:href="#icon-sm-cross" href="#icon-sm-cross"></use></svg></span></span>
			</label>
		</div>

		<div class="richTextArea">
			<div class="bodyEditor defaultText" data-default="Notizen" data-test="activity-note" name="note" contenteditable="true">Notizen</div>
			<div class="audioPlayerModel"></div>
			<div class="editorToolbar">
				<div class="buttons">
					<a href="" class="toolbar_bold editor-tooltip" data-editor-tooltip="Fett (Ctrl B)"><svg class="cui4-icon"><use xlink:href="#icon-bold" href="#icon-bold"></use></svg></a>
					<a href="" class="toolbar_italic editor-tooltip" data-editor-tooltip="Kursiv (Ctrl I)"><svg class="cui4-icon"><use xlink:href="#icon-italic" href="#icon-italic"></use></svg></a>
					<a href="" class="toolbar_underline editor-tooltip" data-editor-tooltip="Unterstreichen (Ctrl U)"><svg class="cui4-icon"><use xlink:href="#icon-underline" href="#icon-underline"></use></svg></a>
					<a href="" class="toolbar_link editor-tooltip" data-editor-tooltip="Verknüpfen (Ctrl K)"><svg class="cui4-icon"><use xlink:href="#icon-link" href="#icon-link"></use></svg></a>
				</div>

				<div class="buttons">
					<a href="" class="toolbar_ul editor-tooltip" data-editor-tooltip="Ungeordnete Liste (Ctrl⇧8)"><svg class="cui4-icon"><use xlink:href="#icon-list-bulleted" href="#icon-list-bulleted"></use></svg></a>
					<a href="" class="toolbar_ol editor-tooltip" data-editor-tooltip="Geordnete Liste (Ctrl⇧7)"><svg class="cui4-icon"><use xlink:href="#icon-list-numbered" href="#icon-list-numbered"></use></svg></a>
				</div>

				<div class="buttons">
					<a href="" class="toolbar_remove editor-tooltip" data-editor-tooltip="Stil entfernen (Ctrl \)"><svg class="cui4-icon"><use xlink:href="#icon-clearformat" href="#icon-clearformat"></use></svg></a>
				</div>
			</div>
		</div>

		<label class="longInput assignActivity contentWrapper__label">
			Zugewiesen an
				<br>
				<span class="input"><div class="select2-container singleselect assignedTo" id="s2id_select-mOcLUk2f"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-4">
					Sixt (Sie)
				</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen4" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-4" id="s2id_autogen4"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen4_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-4" id="s2id_autogen4_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-4">   </ul></div></div><select name="assigned_to_user_id" id="select-mOcLUk2f" placeholder="" class="singleselect assignedTo select2-offscreen" tabindex="-1" title="">
		
			
				<option value="2296758" selected="selected">
					Sixt (Sie)
				</option>
			
		
	</select>
	
</span>
		</label>

		<div class="longInput related">
			<label class="contentWrapper__label">
				Verknüpft mit
			</label>
			<input type="hidden" value="" name="deal_id">
			<input type="hidden" value="" name="person_id">
			<input type="hidden" value="" name="org_id">
			<span class="input hasIcon hasClear">
	
	<input type="text" data-test="deal_title" id="ac-ArimHlCc" autocomplete="off" class="widget-autocompleter" name="deal_title" value="" placeholder="Deal" data-noresultsmessage="">
	<span class="spinner"></span>
	
		<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-deal" href="#icon-sm-deal"></use></svg>
	
	
		<span class="clear"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s"><use xlink:href="#icon-sm-cross" href="#icon-sm-cross"></use></svg></span>
	
</span>

			<span class="input hasIcon multipleOptions person">
	
		<span class="multipleOptions__element multipleOptions__element--noemail" data-id="1">
			<input type="hidden" name="participants_1" value="Brian Miculcy">
			<svg class="cui4-icon cui4-icon--s multipleOptionsElement__cross"><use xlink:href="#icon-sm-cross" href="#icon-sm-cross"></use></svg>
			Max Müller
			
			<span class="multipleOptionsElement__warning">
				<svg class="cui4-icon cui4-icon--yellow"><use xlink:href="#icon-warning-outline" href="#icon-warning-outline"></use></svg>
			</span>
			
			</span>
	
	<input type="text" id="mac-Mzb9Los5" autocomplete="off" class="widget-autocompleter" data-name="participants" placeholder="" data-test="participants" data-placeholder="Kontakte" value="" size="8">
	<span class="spinner"></span>
	
		<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-person" href="#icon-sm-person"></use></svg>
	
	<span class="clear"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s"><use xlink:href="#icon-sm-cross" href="#icon-sm-cross"></use></svg></span>
</span>

			<span class="input hasIcon hasClear">
	
	<input type="text" data-test="org_name" id="ac-ynfpmT2P" autocomplete="off" class="widget-autocompleter" name="org_name" value="" placeholder="Organisation" data-type="organization">
	<span class="spinner"></span>
	
		<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-organization" href="#icon-sm-organization"></use></svg>
	
	
		<span class="clear"><svg class="cui4-icon cui4-icon--black-32 cui4-icon--s"><use xlink:href="#icon-sm-cross" href="#icon-sm-cross"></use></svg></span>
	
</span>
		</div>
		<div class="activityInvites__checkbox">
			<div class="activityInvites__coachmarkParent"></div>
			<label class="cui4-checkbox">
		<input type="checkbox" name="send_activity_notifications" value="true">
		<svg class="cui4-icon cui4-icon--s cui4-checkbox__checkmark"><use xlink:href="#icon-sm-check-done" href="#icon-sm-check-done"></use></svg>
		
			<span class="cui4-checkbox__label">Einladungen an Teilnehmer senden</span>
		
	</label>
			
			<a href="https://support.pipedrive.com/hc/de/articles/115005286065-Einladungen-f%C3%BCr-Aktivit%C3%A4ten" target="_blank">
				<span class="activityInvites__info" data-title="Weitere Informationen zu Aktivitätseinladungen">
					<svg class="cui4-icon cui4-icon--black-32 cui4-icon--s"><use xlink:href="#icon-sm-info-outline" href="#icon-sm-info-outline"></use></svg>
				</span>
			</a>
		</div>
		<div class="activityInvites__language">
			<div class="inviteLanguage__label" style="display: none;">
				Einladungen werden gesendet in
				<span class="inviteLanguage__currentLanguage">Deutsch</span>
				<span>·</span>
				<a href="" class="inviteLanguage__changeBtn">Ändern</a>
			</div>
			<div class="inviteLanguage__select" style="display: none;">
				<span class="input"><div class="select2-container singleselect" id="s2id_select-uWkeZZUL"><a href="javascript:void(0)" class="select2-choice" tabindex="-1">   <span class="select2-chosen" id="select2-chosen-5">
					Deutsch
				</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow" role="presentation"><b role="presentation"></b></span></a><label for="s2id_autogen5" class="select2-offscreen"></label><input class="select2-focusser select2-offscreen" type="text" aria-haspopup="true" role="button" aria-labelledby="select2-chosen-5" id="s2id_autogen5"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <label for="s2id_autogen5_search" class="select2-offscreen"></label>       <input type="text" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" class="select2-input" role="combobox" aria-expanded="true" aria-autocomplete="list" aria-owns="select2-results-5" id="s2id_autogen5_search" placeholder="">   </div>   <ul class="select2-results" role="listbox" id="select2-results-5">   </ul></div></div><select name="notification_language_id" id="select-uWkeZZUL" placeholder="" class="singleselect select2-offscreen" tabindex="-1" title="">
		
			
				<option value="2" selected="selected">
					Deutsch
				</option>
			
		
			
				<option value="38">
					Englisch (UK)
				</option>
			
		
			
				<option value="1">
					Englisch (USA)
				</option>
			
		
			
				<option value="3">
					Estnisch
				</option>
			
		
			
				<option value="5">
					Finnisch
				</option>
			
		
			
				<option value="8">
					Französisch
				</option>
			
		
			
				<option value="16">
					Italienisch
				</option>
			
		
			
				<option value="24">
					Japanisch
				</option>
			
		
			
				<option value="20">
					Koreanisch
				</option>
			
		
			
				<option value="12">
					Niederländisch
				</option>
			
		
			
				<option value="13">
					Norwegisch
				</option>
			
		
			
				<option value="11">
					Polnisch
				</option>
			
		
			
				<option value="7">
					Portugiesisch (Brasilien)
				</option>
			
		
			
				<option value="9">
					Russisch
				</option>
			
		
			
				<option value="47">
					Spanish (Latin America)
				</option>
			
		
			
				<option value="6">
					Spanish (Spain)
				</option>
			
		
			
				<option value="10">
					Türkisch
				</option>
			
		
	</select>
	
</span>
			</div>
		</div>

		
		<div class="clear"></div>
	</form>
</div></div>
<div class="activityEditor__spinnerContainer">
	<span class="activityEditor__spinnerWrapper"><div class="cui4-spinner cui4-spinner--undefined cui4-spinner--light"><div class="cui4-spinner__trail"></div></div></span>
</div>
</div>
	<div class="actions show">
		<div class="markAsDone">
			<label class="cui4-checkbox">
		<input type="checkbox" name="done" value="done" data-title="Als erledigt markieren">
		<svg class="cui4-icon cui4-icon--s cui4-checkbox__checkmark"><use xlink:href="#icon-sm-check-done" href="#icon-sm-check-done"></use></svg>
		
			<span class="cui4-checkbox__label">Als erledigt markieren</span>
		
	</label>
		</div>
		<span class="input">
		<button class="cui4-button" id="pipeButton-TULcGZAV" data-action="cancel">
			
			
				<span class="soft">Abbrechen</span>
			
			
			
		</button>
	</span>

		<span class="input">
		<button class="cui4-button cui4-button--green" id="pipeButton-v6dqOg9L" data-action="save" data-test="activity-save">
			
			
				<span class="">Speichern</span>
			
			
			
		</button>
	</span>
	</div>
</div></div>
	
		<div class="tabContent" data-tab="email"><div class="flowComponentEditor email"><div class="promo" data-composer-drafts-sent-archive-promo="silver-admin-promo">

	<div class="promo__content">
		<section class="promo__unlock-inbox">
			<img class="inbox-image" src="./data/sales-inbox.svg">
			<div class="header">
				<div>
					<div class="header__text">Mailbox entsperren</div>
					<div class="cui4-badge cui4-badge--outline cui4-badge--tier-gold"><div class="cui4-badge__label">Advanced</div></div>
				</div>
				<div class="header__explanation">Ständiges Wechseln zwischen Tabs und manuelles Weiterleiten von E-Mails gehören nun der Vergangenheit an. Nach der Entsperrung können Sie in Ihrer Mailbox E-Mails direkt von Pipedrive aus senden und diese dabei automatisch mit den dazugehörigen Deals und Kontakten verknüpfen.</div>
			</div>
		</section>

		<section class="promo__features">
			<div class="feature">
				<div class="icon"><svg class="cui4-icon cui4-icon--green cui4-icon--s"><use xlink:href="#icon-sm-check" href="#icon-sm-check"></use></svg></div>
				<div class="feature__text">Pipedrive-E-Mails mit allen wichtigen E-Mail-Anbietern synchronisieren</div>
			</div>
			<div class="feature">
				<div class="icon"><svg class="cui4-icon cui4-icon--green cui4-icon--s"><use xlink:href="#icon-sm-check" href="#icon-sm-check"></use></svg></div>
				<div class="feature__text">Öffnen und Anklicken von E-Mails verfolgen</div>
			</div>
			<div class="feature">
				<div class="icon"><svg class="cui4-icon cui4-icon--green cui4-icon--s"><use xlink:href="#icon-sm-check" href="#icon-sm-check"></use></svg></div>
				<div class="feature__text">Mit anpassbaren Vorlagen Zeit sparen</div>
			</div>
			<div class="feature">
				<div class="icon"><svg class="cui4-icon cui4-icon--green cui4-icon--s"><use xlink:href="#icon-sm-check" href="#icon-sm-check"></use></svg></div>
				<div class="feature__text">Professioneller Look mit anpassbarer Signatur</div>
			</div>
		</section>

		<section class="promo__upgrade">
			<div class="row">
				<div class="button-container"><button class="cui4-button cui4-button--green" data-testid="button"><span>Upgrade auf Advanced</span></button></div>
				<div class="link-container">
					<a class="learn-more track-analytics" href="" target="_blank" data-analytics="learn-more">
						Weitere Informationen zur E-Mail-Integration
					</a>
				</div>
			</div>
			<div class="row gold-rush-teaser" style="display: none;">
				<span class="gold-rush-teaser__arrowUp"></span>
				<div class="gold-rush-teaser__text">Letzte Chance, um den Advanced-Plan für 30 Tage kostenlos zu testen</div>
			</div>
		</section>
	</div>

</div>
</div>
</div>
	
		<div class="tabContent empty" data-tab="file"><div class="flowComponentEditor file">
	<div class="attachmentComponent">
		
			<div class="empty">
				Dateien hierher ziehen oder <a href="" class="attachFile"> von Ihrem Computer auswählen </a>
				
			</div>
		
		<div class="dropTarget">
			<p>Dateien hierher ziehen</p>
		</div>
	</div>
</div>
</div>
	
</div></div>
		<a href="" class="cui4-button cui4-button--ghost closeBtn" data-tooltip="Schließen"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-cross" href="#icon-cross"></use></svg></a>

		
			<div class="fakeInput">Hier klicken, um Notizen anzufertigen ...</div>
		
</div></div>
</div>
<div class="flowItems">
	<div class="sectionTag">
		<span class="pill fixed">Geplant</span>
	</div>
	<div class="flowContainer focus" data-flow-title="Focus">
		
		<div class="focusTimelineBar"></div>
			
				<div class="flowItemContainer activity" data-item-id="activity1"><div class="flowItem activity overdue">
	<div class="flowItemContent"><div class="flowComponent activity ">
	<div class="actionButtons">
		<button class="cui4-button selectSettingsButton cui4-button--ghost cui4-button--s" id="pipeButton-e99P7FAi" data-type="activity" data-tooltip="Einstellungen">
			<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-ellipsis" href="#icon-sm-ellipsis"></use></svg>
			
			
			
		</button>
	</div>
	<h3>
		<span class="input markAsDone"><label class="cui4-checkbox cui4-checkbox--round">
		<input type="checkbox" name="markdone" value="1">
		<svg class="cui4-icon cui4-icon--s cui4-checkbox__checkmark"><use xlink:href="#icon-sm-check-done" href="#icon-sm-check-done"></use></svg>
		
	</label></span>
		<a class="activityWrapper" data-test="planned-activity-title">Eingehender Anruf</a>
	</h3>
	<div class="flowItemDetails">
		<span class="relative today"><span class="interactiveTimestamp" data-time="2019-07-26 11:15:00" data-utc="0" data-notime="0" data-spec="default" title="Freitag, 26. Juli 2019 11:15">today</span></span>
		<span class="separator">·</span><span class="author">Sixt</span>
	</div>
	<div class="relatedItems">
	
		<ul class="flowItemDetails">
			
				<li>
					<span class="relatedItemIcon"><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-person" href="#icon-sm-person"></use></svg></span>
					Max Müller					
				</li>
			
		</ul>
	
</div>
</div>

	<style>
	   .webInfo li { display: block !important; }
	</style>

	<div class="activityNote">
		<span class="contentHtml isInline" data-test="activity-note">
			<ul class="webInfo">
				<?php if(!empty($hersteller)): ?>
					<li><strong>Hersteller</strong>: <?= $hersteller?></li>
				<?php endif; ?>
				<?php if(!empty($modell)): ?>
					<li><strong>Modell-Linie</strong>: <?= $modell?></li>
				<?php endif; ?>
				<?php if(!empty($karosserie)): ?>
					<li><strong>Karosserie</strong>: <?= $karosserie?></li>
				<?php endif; ?>
				<?php if(!empty($kraftstoff)): ?>
					<li><strong>Kraftstoff</strong>: <?= $kraftstoff?></li>
				<?php endif; ?>
				<?php if(!empty($anzTueren)): ?>
					<li><strong>Türen</strong>: <?= $anzTueren?></li>
				<?php endif; ?>
				<?php if(!empty($leistung)): ?>
					<li><strong>Leistung</strong>: <?= $leistung?></li>
				<?php endif; ?>
				<?php if(!empty($vorgModell)): ?>
					<li><strong>Modell</strong>: <?= $vorgModell?></li>
				<?php endif; ?>
				<?php if(!empty($preis)): ?>
					<li><strong>Preis-Webseite</strong>: <?= $preis?> €</li>
				<?php endif; ?>
				<?php if(!empty($preisLeasing)): ?>
					<li><strong>Leasingpreis-Webseite</strong>: <?= $preisLeasing?> €</li>
				<?php endif; ?>
			</ul>		
		</span>
		<div class="audioPlayerModel"></div>
		<div class="closeActivityNote"><span><svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-collapse" href="#icon-collapse"></use></svg></span></div>
	</div>
</div>
</div>

	<span class="flowItemIcon">
		<svg class="cui4-icon cui4-icon--black-32"><use xlink:href="#icon-ac-call" href="#icon-ac-call"></use></svg>
	</span>
</div>
			
	</div>

	<div class="sectionTag">
		<span class="pill fixed">Vergangen</span>
	</div>

	<div class="flowFiltersWrapper"><ul class="flowFilters">
	
		<li class="active" data-filter="all">Alle<span class="count"></span></li>
	
		<li class="disabled" data-filter="activity">Aktivitäten<span class="count"></span></li>
	
		<li class="disabled" data-filter="note">Notizen<span class="count"></span></li>
	
		<li data-filter="emailMessage">E-Mails<span class="count"></span></li>
	
		<li data-filter="file">Dateien<span class="count"></span></li>
	
		<li class="disabled" data-filter="deal">Deals<span class="count"></span></li>
	
		<li data-filter="change">Changelog<span class="count"></span></li>
	
</ul></div>

	<div class="flowContainer past" data-flow-title="Vergangen" data-filter="all">
		<div class="timelineBar"></div>

		
			
				<div class="flowItemContainer change" data-item-id="personChange1"><div class="flowItem change">
	<div class="flowItemContent"><div class="flowComponent change important">
	
		<div class="changeLogWrapper">

			
				Kontaktperson erstellt
			
		</div>
	
	<div class="flowItemDetails">
		<span class="relative"><span class="interactiveTimestamp" data-time="2019-07-26 11:15:33" data-utc="0" data-notime="0" data-spec="default" title="Freitag, 26. Juli 2019 11:15">26. Juli  11:15</span></span>
		
			<span class="separator">·</span><span class="author">Sixt</span>
		
	</div>
</div></div>
</div>
</div>
			
		

	</div>

</div></div>
			</div>
		</div>
	</div>
</div></div></div>
	</div>

	<div id="convention-ui-icons">
		<svg xmlns="http://www.w3.org/2000/svg" class="cui-svg"><symbol id="icon-ac-addressbook" viewBox="0 0 24 24"><path d="M3 5v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2zm12 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z"></path></symbol><symbol id="icon-ac-bell" viewBox="0 0 24 24"><path d="M15 16.27c0 1.05.96 1.82 2 1.82V19H7v-.91c1.04 0 2-.77 2-1.82V13a3 3 0 1 1 6 0v3.27zM6.1 13l-1.97-.32a7.96 7.96 0 0 1 4.7-6.05l.8 1.83A6.05 6.05 0 0 0 6.1 13zm11.73 0a6.05 6.05 0 0 0-3.52-4.54l.8-1.83a7.96 7.96 0 0 1 4.7 6.05l-1.98.32zM24 14h-2c0-4.45-3-8.41-7.27-9.62l.54-1.93A12.05 12.05 0 0 1 24 14zM2 14H0C0 8.65 3.59 3.9 8.73 2.45l.54 1.93A10.03 10.03 0 0 0 2 14zm10 8a2 2 0 0 1-2-2h4a2 2 0 0 1-2 2z"></path></symbol><symbol id="icon-ac-bubble" viewBox="0 0 24 24"><path d="M9 8v7H7l-3 3v-3H3a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h15a1 1 0 0 1 1 1v4h-9a1 1 0 0 0-1 1zm12 1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1v3l-3-3h-5a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1h9z"></path></symbol><symbol id="icon-ac-bulb" viewBox="0 0 24 24"><path d="M18 8c0 4-3 5-3 9H9c0-4-3-5-3-9s2.41-6 6-6 6 2 6 6zM9 20.75c0 .27.18.5.44.6l2.35.62a.68.68 0 0 0 .42 0l2.35-.63a.63.63 0 0 0 .44-.59V18H9v2.75z"></path></symbol><symbol id="icon-ac-calendar" viewBox="0 0 24 24"><path d="M20 10h-6V8h6v2zm-6-6a1 1 0 0 0-.7.3L12 5.58l-1.3-1.3A1 1 0 0 0 10 4H3a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6.59l1.7 1.7a1 1 0 0 0 1.42 0l1.7-1.7H21a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-7z"></path></symbol><symbol id="icon-ac-camera" viewBox="0 0 24 24"><path d="M9 3h6l1.83 2H20a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h3.17L9 3zm3 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-1.8a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4z"></path></symbol><symbol id="icon-ac-brush" viewBox="0 0 24 24"><path d="M7 14a3 3 0 0 0-3 3c0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2a4 4 0 0 0 4-4 3 3 0 0 0-3-3zm13.71-9.37l-1.34-1.34a1 1 0 0 0-1.41 0L9 12.25 11.75 15l8.96-8.96a1 1 0 0 0 0-1.41z"></path></symbol><symbol id="icon-ac-car" viewBox="0 0 24 24"><path d="M18.92 5.01A1.5 1.5 0 0 0 17.5 4h-11a1.5 1.5 0 0 0-1.42 1.01L3 11v8a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1h12v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-8l-2.08-5.99zM6.5 15a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm11 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 10l1.5-4.5h11L19 10H5z"></path></symbol><symbol id="icon-ac-call" viewBox="0 0 24 24"><path d="M6.38 3c1.12.56 2.8 3.38 3.37 4.5 0 .56-1.69 2.25-1.69 2.81.56 1.69 3.94 5.06 5.63 5.63.56 0 2.25-1.69 2.81-1.69a22.9 22.9 0 0 1 4.5 3.38c0 1.12-2.25 3.37-3.38 3.37C12 19.87 4.13 12 3 6.37 3 5.25 5.25 3 6.38 3"></path></symbol><symbol id="icon-ac-cart" viewBox="0 0 24 24"><path d="M7 18a2 2 0 1 0 .01 4A2 2 0 0 0 7 18zM1 2v2h2l3.6 7.59-1.35 2.45A2 2 0 0 0 7 17h12v-2H7.42a.25.25 0 0 1-.25-.25l.03-.12.9-1.63h7.45a2 2 0 0 0 1.75-1.03l3.58-6.49A1 1 0 0 0 20 4H5.21l-.94-2H1zm16 16a2 2 0 1 0 .01 4 2 2 0 0 0-.01-4z"></path></symbol><symbol id="icon-ac-checkbox" viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></symbol><symbol id="icon-ac-clip" viewBox="0 0 24 24"><path d="M19 3h-4.18A3.01 3.01 0 0 0 12 1c-1.3 0-2.4.84-2.82 2H5a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-7 0a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1zm7 18H5V5h2v3h10V5h2v16z"></path></symbol><symbol id="icon-ac-document" viewBox="0 0 24 24"><path d="M6 2h9l5 5v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm8 1v5h5l-5-5zM7 18h10v-2H7v2zm0-4h7v-2H7v2z"></path></symbol><symbol id="icon-ac-downarrow" viewBox="0 0 24 24"><path d="M20.54 5.23l-1.39-1.68A1.45 1.45 0 0 0 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6.5c0-.48-.17-.93-.46-1.27zM12 17.5L6.5 12H10v-2h4v2h3.5L12 17.5zM5.12 5l.81-1h12l.94 1H5.12z"></path></symbol><symbol id="icon-ac-key" viewBox="0 0 24 24"><path d="M9.86 16.59c-.6.58-1.6.58-2.2 0a1.42 1.42 0 0 1 0-2.09 1.6 1.6 0 0 1 2.2 0c.61.58.61 1.51 0 2.09zm4.05-3.14l2.2-2.09-1.47-1.39 1.47-1.4 1.48 1.4 1.47-1.4-1.47-1.39 1.47-1.4 1.47 1.4L22 5.78 19.06 3l-8.1 7.67-.73-.7a2.16 2.16 0 0 0-2.94 0L3.6 13.45a1.9 1.9 0 0 0 0 2.8l4.41 4.17c.82.77 2.13.77 2.94 0l3.68-3.48a1.9 1.9 0 0 0 0-2.79l-.73-.7z"></path></symbol><symbol id="icon-ac-email" viewBox="0 0 24 24"><path d="M16.83 6.85L7.7 14.9c-.43.31-.69.91-.69 1.42v4.1c0 .6.32.76.8.36l3.3-3.46 2.88 2.71c.23.21.5.15.6-.13l6.37-16.54c.12-.29-.04-.43-.34-.32L3.27 9.3c-.3.11-.36.37-.13.58l2.18 2.05c.22.2.63.27.91.12L16.7 6.66c.56-.29.62-.2.14.2z"></path></symbol><symbol id="icon-ac-finish" viewBox="0 0 24 24"><path d="M21 3a1 1 0 0 1 1 1v4a1 1 0 0 1-.38.78l-4.92 3.94a6 6 0 0 1-3.7 2.19V16h2a1 1 0 0 1 1 1v2H8v-2a1 1 0 0 1 1-1h2v-1.1a6 6 0 0 1-3.7-2.18L2.38 8.78A1 1 0 0 1 2 8V4a1 1 0 0 1 1-1h3.28A2 2 0 0 1 8 2h8a2 2 0 0 1 1.72 1H21zm-4 19H7v-2h10v2zm3-14.48V5h-2v4.12l2-1.6zm-16 0l2 1.6V5H4v2.52z"></path></symbol><symbol id="icon-ac-loop" viewBox="0 0 24 24"><path d="M18 12h-3l4-4 4 4h-3a8 8 0 0 1-11.96 6.96l1.49-1.49A6 6 0 0 0 18 12zM4 12a8 8 0 0 1 11.96-6.96l-1.49 1.49A6 6 0 0 0 6 12h3l-4 4-4-4h3z"></path></symbol><symbol id="icon-ac-linegraph" viewBox="0 0 24 24"><path d="M17.3 9.3L15 7h6v6l-2.3-2.3-5.7 5.71-4-4-5.3 5.3-1.4-1.42L9 9.6l4 4 4.3-4.3z"></path></symbol><symbol id="icon-ac-deadline" viewBox="0 0 24 24"><path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6z"></path></symbol><symbol id="icon-ac-meeting" viewBox="0 0 24 24"><path d="M16 11a2.99 2.99 0 0 0 2.99-3A3 3 0 1 0 16 11zm-8 0a2.99 2.99 0 0 0 2.99-3A3 3 0 1 0 8 11zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path></symbol><symbol id="icon-ac-lunch" viewBox="0 0 24 24"><path d="M8.1 13.34l2.83-2.83L3.91 3.5a4 4 0 0 0 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"></path></symbol><symbol id="icon-ac-padlock" viewBox="0 0 24 24"><path d="M18 8h-1V6A5 5 0 0 0 7 6v2H6a2 2 0 0 0-2 2v10c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2zm-6 9a2 2 0 0 1-2-2c0-1.1.9-2 2-2a2 2 0 0 1 2 2 2 2 0 0 1-2 2zm3.1-9H8.9V6a3.1 3.1 0 0 1 6.2 0v2z"></path></symbol><symbol id="icon-ac-picture" viewBox="0 0 24 24"><path d="M21 19V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"></path></symbol><symbol id="icon-ac-presentation" viewBox="0 0 24 24"><path d="M10 8v8l5-4-5-4zm9-5H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 16H5V5h14v14z"></path></symbol><symbol id="icon-ac-plane" viewBox="0 0 24 24"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 1 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"></path></symbol><symbol id="icon-ac-search" viewBox="0 0 24 24"><path d="M16.15 14.7h-.77l-.27-.27a6.32 6.32 0 1 0-.68.68l.26.27v.77L19.55 21 21 19.55l-4.85-4.86zm-5.9-.2a4.24 4.24 0 1 1-.01-8.49 4.24 4.24 0 0 1 .01 8.5z"></path></symbol><symbol id="icon-ac-signpost" viewBox="0 0 24 24"><path d="M11 21.38c0 .34.22.62.5.62h1c.28 0 .5-.28.5-.63V17h-2v4.38zM7.7 11a.53.53 0 0 0-.32.1L4.3 13.37A.8.8 0 0 0 4 14c0 .26.11.5.3.64l3.08 2.25c.1.07.2.11.31.11h10.7c.33 0 .61-.34.61-.75v-4.5c0-.41-.28-.75-.62-.75H7.7zM11 4V2.62c0-.34.22-.62.5-.62h1c.28 0 .5.28.5.63V4h3.3c.12 0 .23.04.32.1l3.08 2.26c.19.13.3.38.3.64a.8.8 0 0 1-.3.64L16.62 9.9c-.1.07-.2.11-.31.11H5.6C5.29 10 5 9.66 5 9.25v-4.5c0-.41.28-.75.62-.75H11z"></path></symbol><symbol id="icon-ac-shuffle" viewBox="0 0 24 24"><path d="M10.59 9.17L5.41 4 4 5.41l5.17 5.17 1.42-1.41zM14.5 4l2.04 2.04L4 18.59 5.41 20 17.96 7.46 20 9.5V4h-5.5zm.33 9.41l-1.41 1.41 3.13 3.13L14.5 20H20v-5.5l-2.04 2.04-3.13-3.13z"></path></symbol><symbol id="icon-ac-scissors" viewBox="0 0 24 24"><path d="M9.64 7.64L22 20v1h-3l-7-7-2.36 2.36a4 4 0 1 1-2-2L10 12 7.64 9.64a4 4 0 1 1 2-2zM12 12.5a.5.5 0 0 0 .5-.5.5.5 0 0 0-.5-.5.5.5 0 0 0-.5.5c0 .28.22.5.5.5zM6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM19 3h3v1l-7 7-2-2 6-6z"></path></symbol><symbol id="icon-ac-smartphone" viewBox="0 0 24 24"><path d="M15.5 1h-8A2.5 2.5 0 0 0 5 3.5v17A2.5 2.5 0 0 0 7.5 23h8a2.5 2.5 0 0 0 2.5-2.5v-17A2.5 2.5 0 0 0 15.5 1zm-4 21a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5-4H7V4h9v14z"></path></symbol><symbol id="icon-ac-sound" viewBox="0 0 24 24"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3A4.5 4.5 0 0 0 14 7.97v8.05A4.47 4.47 0 0 0 16.5 12zM14 3.23v2.06a7 7 0 0 1 0 13.42v2.06a9 9 0 0 0 0-17.54z"></path></symbol><symbol id="icon-ac-suitcase" viewBox="0 0 24 24"><path d="M14 16v-2h7v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6h7v2h4zm7-10a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-7v-1h-4v1H3a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h5V3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v3h5zm-7 0V4h-4v2h4z"></path></symbol><symbol id="icon-ac-task" viewBox="0 0 24 24"><path d="M11.99 2a10 10 0 1 1 0 20.01A10 10 0 0 1 12 2zM12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm.5-13v5.25l4.5 2.67-.75 1.23L11 13V7h1.5z"></path></symbol><symbol id="icon-ac-truck" viewBox="0 0 24 24"><path d="M20 8l3 4v5h-2a3 3 0 1 1-6 0H9a3 3 0 1 1-6 0H1V6c0-1.1.9-2 2-2h14v4h3zM6 18.5a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zm13.5-9H17V12h4.46L19.5 9.5zm-1.5 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z"></path></symbol><symbol id="icon-ac-uparrow" viewBox="0 0 24 24"><path d="M20.5 5.2l-1.4-1.7c-.2-.3-.6-.5-1.1-.5H6c-.5 0-.9.2-1.2.5L3.5 5.2c-.3.4-.5.8-.5 1.3V19c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6.5c0-.5-.2-.9-.5-1.3zm-4 7.8H14v3h-4v-3H7.5L12 8.5l4.5 4.5zM5.1 5l.8-1h12l.9 1H5.1z"></path></symbol><symbol id="icon-ac-pricetag" viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9A1.99 1.99 0 0 0 11 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 .59 1.42l9 9a1.99 1.99 0 0 0 2.82-.01l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></symbol><symbol id="icon-ac-wifi" viewBox="0 0 24 24"><path d="M1 9l2 2a12.73 12.73 0 0 1 18 0l2-2A15.57 15.57 0 0 0 1 9zm8 8l3 3 3-3a4.24 4.24 0 0 0-6 0zm-4-4l2 2a7.07 7.07 0 0 1 10 0l2-2a9.91 9.91 0 0 0-14 0z"></path></symbol><symbol id="icon-ac-tool" viewBox="0 0 24 24"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"></path></symbol><symbol id="icon-ac-world" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1 17.93a7.99 7.99 0 0 1-6.79-9.72L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3a1 1 0 0 0-1-1H8v-2h2a1 1 0 0 0 1-1V7h2a2 2 0 0 0 2-2v-.41a8 8 0 0 1 2.9 12.8z"></path></symbol><symbol id="icon-add-availability" viewBox="0 0 24 24"><path d="M9 5h6V3h2v2a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-5v-2h5V9H7v3H5l.01-5A2 2 0 0 1 7 5V3h2v2zM5 19H2v-2h3v-3h2v3h3v2H7v3H5v-3z"></path></symbol><symbol id="icon-add-field" viewBox="0 0 24 24"><path d="M7 5h10a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2zm10 2H7v2h10V7zM5 22v-3H2v-2h3v-3h2v3h3v2H7v3H5zm12-3h-5v-2h5v-2H9v-2h8a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2z"></path></symbol><symbol id="icon-address" viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"></path></symbol><symbol id="icon-apps" viewBox="0 0 24 24"><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"></path></symbol><symbol id="icon-arrow-left" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></symbol><symbol id="icon-arrow-right" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path></symbol><symbol id="icon-arrow-up" viewBox="0 0 24 24"><path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z"></path></symbol><symbol id="icon-arrowdouble-left" viewBox="0 0 24 24"><path d="M12.41 7.41L7.83 12l4.58 4.59L11 18l-6-6 6-6 1.41 1.41zm6 0L13.83 12l4.58 4.59L17 18l-6-6 6-6 1.41 1.41z"></path></symbol><symbol id="icon-archive" viewBox="0 0 24 24"><path d="M4 4h16a1 1 0 0 1 1 1v3H3V5a1 1 0 0 1 1-1zm0 5h16v11a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9zm5 4v2h6v-2H9z"></path></symbol><symbol id="icon-arrowdouble-right" viewBox="0 0 24 24"><path d="M6.41 6l6 6-6 6L5 16.59 9.58 12 5 7.41 6.41 6zm6 0l6 6-6 6L11 16.59 15.58 12 11 7.41 12.41 6z"></path></symbol><symbol id="icon-attach" viewBox="0 0 24 24"><path d="M2 12.5A5.5 5.5 0 0 1 7.5 7H18a4 4 0 1 1 0 8H9.5a2.5 2.5 0 0 1 0-5H17v2H9.41c-.55 0-.55 1 0 1H18a2 2 0 0 0 0-4H7.5a3.5 3.5 0 0 0 0 7H17v2H7.5A5.5 5.5 0 0 1 2 12.5z"></path></symbol><symbol id="icon-arrow-down" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path></symbol><symbol id="icon-arrow-back" viewBox="0 0 24 24"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20z"></path></symbol><symbol id="icon-automation" viewBox="0 0 24 24"><path d="M18.92 10.12A4 4 0 0 1 22 14v1a1 1 0 0 1-2 0v-1a2 2 0 0 0-1.16-1.8l-1.63 5.64A3 3 0 0 1 15 19.91V20a3 3 0 1 1-6 0v-.08a3 3 0 0 1-2.2-2.09L5.15 12.2A2 2 0 0 0 4 14v1a1 1 0 0 1-2 0v-1a4 4 0 0 1 3.07-3.88A3 3 0 0 1 6 8.72V6H5a1 1 0 1 1 0-2h1.54A4 4 0 0 1 10 2h1a1 1 0 1 1 2 0h1.03a4 4 0 0 1 3.47 2H19a1 1 0 1 1 0 2h-.97v2.75c.41.36.72.83.89 1.37zm-1.9 1.16a1 1 0 0 0-.96-1.28H7.94a1 1 0 0 0-.96 1.28l1.74 6a1 1 0 0 0 .96.72h4.66a1 1 0 0 0 .96-.72l1.74-6zM12 21a1 1 0 0 0 1-1h-2a1 1 0 0 0 1 1zM8 6v2h8.03V6a2 2 0 0 0-2-2H10a2 2 0 0 0-2 2zm2-1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zM3 17a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm8-5h2a1 1 0 0 1 0 2h-2a1 1 0 0 1 0-2zm1 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm2-10a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 12a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"></path></symbol><symbol id="icon-backspace" viewBox="0 0 24 24"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8 8 8 1.41-1.41L7.83 13H20z"></path></symbol><symbol id="icon-bell" viewBox="0 0 24 24"><path d="M11.5 22a2 2 0 0 0 2-2h-4c0 1.1.9 2 2 2zm6.5-6v-5.5a6.5 6.5 0 0 0-5-6.32V3.5a1.5 1.5 0 1 0-3 0v.68a6.5 6.5 0 0 0-5 6.32V16l-2 2v1h17v-1l-2-2z"></path></symbol><symbol id="icon-block" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zM4 12a8 8 0 0 1 12.9-6.31L5.69 16.9A7.9 7.9 0 0 1 4 12zm8 8a7.9 7.9 0 0 1-4.9-1.69L18.31 7.1A8 8 0 0 1 12 20z"></path></symbol><symbol id="icon-bold" viewBox="0 0 24 24"><path d="M15.6 11.79c.97-.67 1.65-1.77 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.09 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42zM10 7.5h3a1.5 1.5 0 1 1 0 3h-3v-3zm3.5 9H10v-3h3.5a1.5 1.5 0 1 1 0 3z"></path></symbol><symbol id="icon-autocomplete" viewBox="0 0 24 24"><path d="M15 21h2v-2h-2v2zm4-12h2V7h-2v2zM3 5v14c0 1.1.9 2 2 2h4v-2H5V5h4V3H5a2 2 0 0 0-2 2zm16-2v2h2a2 2 0 0 0-2-2zm-8 20h2V1h-2v22zm8-6h2v-2h-2v2zM15 5h2V3h-2v2zm4 8h2v-2h-2v2zm0 8a2 2 0 0 0 2-2h-2v2z"></path></symbol><symbol id="icon-call-in" viewBox="0 0 24 24"><path d="M6.38 3c1.12.56 2.8 3.38 3.37 4.5 0 .56-1.69 2.25-1.69 2.81.56 1.69 3.94 5.06 5.63 5.63.56 0 2.25-1.69 2.81-1.69a22.9 22.9 0 0 1 4.5 3.38c0 1.12-2.25 3.37-3.38 3.37C12 19.87 4.13 12 3 6.37 3 5.25 5.25 3 6.38 3zM16.4 9H19v2h-6V5h2v2.59l5.3-5.3 1.4 1.42L16.42 9z"></path></symbol><symbol id="icon-calendar" viewBox="0 0 24 24"><path d="M17 13h-5v5h5v-5zM16 2v2H8V2H6v2H5a2 2 0 0 0-1.99 2L3 20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1V2h-2zm3 18H5V9h14v11z"></path></symbol><symbol id="icon-call-out" viewBox="0 0 24 24"><path d="M6.38 3c1.12.56 2.8 3.38 3.37 4.5 0 .56-1.69 2.25-1.69 2.81.56 1.69 3.94 5.06 5.63 5.63.56 0 2.25-1.69 2.81-1.69a22.9 22.9 0 0 1 4.5 3.38c0 1.12-2.25 3.37-3.38 3.37C12 19.87 4.13 12 3 6.37 3 5.25 5.25 3 6.38 3zm12.2 1H16V2h6v6h-2V5.41l-5.3 5.3-1.4-1.42L18.58 4z"></path></symbol><symbol id="icon-call" viewBox="0 0 24 24"><path d="M6.38 3c1.12.56 2.8 3.38 3.37 4.5 0 .56-1.69 2.25-1.69 2.81.56 1.69 3.94 5.06 5.63 5.63.56 0 2.25-1.69 2.81-1.69a22.9 22.9 0 0 1 4.5 3.38c0 1.12-2.25 3.37-3.38 3.37C12 19.87 4.13 12 3 6.37 3 5.25 5.25 3 6.38 3"></path></symbol><symbol id="icon-chart-bar-y" viewBox="0 0 24 24"><path d="M8 19a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v10zm6 0a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v14zm6 0a1 1 0 0 1-1 1h-2a1 1 0 0 1-1-1v-6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v6z"></path></symbol><symbol id="icon-chart-bar-x" viewBox="0 0 24 24"><path d="M5 4h10a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1zm0 6h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1zm0 6h6a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1z"></path></symbol><symbol id="icon-chart-pie" viewBox="0 0 24 24"><path d="M19.94 10.94H13V4a8 8 0 0 1 6.94 6.94zm0 2A8 8 0 0 1 13 19.88v-6.94h6.94zM11 19.88A8 8 0 0 1 11 4v15.88z"></path></symbol><symbol id="icon-chart-table" viewBox="0 0 24 24"><path d="M5.5 4h13c.83 0 1.5.67 1.5 1.5V8H4V5.5C4 4.67 4.67 4 5.5 4zM4 10h4v10H5.5A1.5 1.5 0 0 1 4 18.5V10zm6 0h4v10h-4V10zm6 0h4v8.5c0 .83-.67 1.5-1.5 1.5H16V10z"></path></symbol><symbol id="icon-chart-scorecard" viewBox="0 0 24 24"><path d="M7 4h10a3 3 0 0 1 3 3v10a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3zm0 2a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7zm7 10h-2v-6h-2V8h4v8z"></path></symbol><symbol id="icon-check" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path></symbol><symbol id="icon-cogs" viewBox="0 0 24 24"><path d="M9.95 2h4.1c.26 0 .47.2.5.45l.26 2.6a7.5 7.5 0 0 1 1.81 1.04L19 5.02a.5.5 0 0 1 .64.2l2.05 3.55a.5.5 0 0 1-.15.66l-2.11 1.52a7.56 7.56 0 0 1 0 2.1l2.11 1.52c.21.15.27.43.15.66l-2.05 3.54a.5.5 0 0 1-.64.2l-2.38-1.06c-.55.43-1.16.78-1.81 1.05l-.26 2.59a.5.5 0 0 1-.5.45h-4.1a.5.5 0 0 1-.5-.45l-.25-2.6a7.5 7.5 0 0 1-1.82-1.04L5 18.98a.5.5 0 0 1-.64-.2l-2.04-3.55a.5.5 0 0 1 .14-.66l2.11-1.52a7.56 7.56 0 0 1 0-2.1L2.46 9.43a.5.5 0 0 1-.14-.66l2.04-3.54a.5.5 0 0 1 .64-.2l2.38 1.06A7.5 7.5 0 0 1 9.2 5.04l.26-2.59a.5.5 0 0 1 .5-.45zM12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path></symbol><symbol id="icon-collapse" viewBox="0 0 24 24"><path d="M12 7.59l5.3-5.3 1.4 1.42-6.7 6.7-6.7-6.7 1.4-1.42L12 7.6zm-6.7 12.7l6.7-6.7 6.7 6.7-1.4 1.42-5.3-5.3-5.3 5.3-1.4-1.42z"></path></symbol><symbol id="icon-clearformat" viewBox="0 0 24 24"><path d="M4.27 4L3 5.27l6.97 6.97L7.5 18h3l1.57-3.66L17.73 20 19 18.73 4.55 4.27 4.27 4zM7 4v.18L9.82 7h2.4l-.72 1.68 2.1 2.1L15.21 7H21V4H7z"></path></symbol><symbol id="icon-checkbox" viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></symbol><symbol id="icon-credit-card" viewBox="0 0 24 24"><path d="M20 4a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2l.01-12c0-1.11.88-2 1.99-2h16zm0 14v-6H4v6h16zm0-10V6H4v2h16z"></path></symbol><symbol id="icon-dashboard" viewBox="0 0 24 24"><path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8V11h-8v10zm0-18v6h8V3h-8z"></path></symbol><symbol id="icon-cross" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></symbol><symbol id="icon-deadline" viewBox="0 0 24 24"><path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6z"></path></symbol><symbol id="icon-deal" viewBox="0 0 24 24"><path d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm.3-10.86c-1.78-.45-2.35-.93-2.35-1.67 0-.85.8-1.44 2.12-1.44 1.4 0 1.92.66 1.97 1.64h1.73a3.1 3.1 0 0 0-2.52-2.97V5h-2.36v1.68c-1.52.33-2.75 1.3-2.75 2.8 0 1.8 1.5 2.7 3.7 3.22 1.96.47 2.35 1.15 2.35 1.87 0 .54-.38 1.4-2.12 1.4-1.62 0-2.25-.72-2.34-1.64H8c.1 1.7 1.38 2.66 2.9 2.98V19h2.35v-1.67c1.53-.29 2.75-1.17 2.75-2.76 0-2.21-1.91-2.97-3.7-3.43z"></path></symbol><symbol id="icon-delete" viewBox="0 0 24 24"><path d="M22 3H7c-.69 0-1.23.35-1.59.88L0 12l5.41 8.11c.36.53.9.89 1.59.89h15a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-3 12.59L17.59 17 14 13.41 10.41 17 9 15.59 12.59 12 9 8.41 10.41 7 14 10.59 17.59 7 19 8.41 15.41 12 19 15.59z"></path></symbol><symbol id="icon-dialpad" viewBox="0 0 24 24"><path d="M12 19a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zM6 1a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm0 6a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm0 6a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm12-8a2 2 0 0 0 2-2 2 2 0 0 0-2-2 2 2 0 0 0-2 2c0 1.1.9 2 2 2zm-6 8a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm6 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm0-6a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm-6 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm0-6a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2z"></path></symbol><symbol id="icon-daterange" viewBox="0 0 24 24"><path d="M17 10H7v2h10v-2zm2-7h-1V1h-2v2H8V1H6v2H5a2 2 0 0 0-1.99 2L3 19a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 16H5V8h14v11zm-5-5H7v2h7v-2z"></path></symbol><symbol id="icon-download" viewBox="0 0 24 24"><path d="M19.35 10.04A4.98 4.98 0 0 1 19 20H6a6 6 0 0 1-.65-11.96 7.5 7.5 0 0 1 14 2zM17 13h-3V9h-4v4H7l5 5 5-5z"></path></symbol><symbol id="icon-drag-handle" viewBox="0 0 24 24"><path d="M20 9H4v2h16V9zM4 15h16v-2H4v2z"></path></symbol><symbol id="icon-email-template" viewBox="0 0 24 24"><path d="M6 22v-3H3v-2h3v-3h2v3h3v2H8v3H6zm8-13V4l5 5h-5zm-8 3V6c0-1.1.9-2 2-2h5v2H8v6H6zm11-2h2v7a2 2 0 0 1-2 2h-4v-2h4v-7z"></path></symbol><symbol id="icon-email-outline" viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-1.99 2L2 18c0 1.1.9 2 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"></path></symbol><symbol id="icon-ellipsis" viewBox="0 0 24 24"><path d="M6 10a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm12 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm-6 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2z"></path></symbol><symbol id="icon-email" viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-1.99 2L2 18c0 1.1.9 2 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path></symbol><symbol id="icon-expand" viewBox="0 0 24 24"><path d="M12 19.59l5.3-5.3 1.4 1.42-6.7 6.7-6.7-6.7 1.4-1.42 5.3 5.3zm0-18l6.7 6.7-1.4 1.42L12 4.4 6.7 9.7 5.3 8.28 12 1.6z"></path></symbol><symbol id="icon-file-document" viewBox="0 0 24 24"><path d="M6 2h9l5 5v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4c0-1.1.9-2 2-2zm8 1v5h5l-5-5zM7 18h10v-2H7v2zm0-4h7v-2H7v2z"></path></symbol><symbol id="icon-file-pdf" viewBox="0 0 24 24"><path d="M16.41 1L21 5.59V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h11.41zM15 7h5l-5-5v5zm4.8 8.5V14h-3.3c-.83 0-1.5.67-1.5 1.5V20h1.5v-2H19v-1.5h-2.5v-1h3.3zM11.5 20a3 3 0 0 0 0-6H10v6h1.5zm-4.75-1.5a2.25 2.25 0 0 0 0-4.5H4.5v6H6v-1.5h.75zm4.75-3a1.5 1.5 0 0 1 0 3v-3zm-4.75 0a.75.75 0 0 1 0 1.5H6v-1.5h.75z"></path></symbol><symbol id="icon-email-mark-as-unread" viewBox="0 0 24 24"><path d="M20 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM4 4h11.1a5.02 5.02 0 0 0 0 2H4l8 6 4.53-3.4a5 5 0 0 0 1.4.95L12 14 4 8v10h16v-8c.71 0 1.39-.15 2-.42V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2l.01-12A2 2 0 0 1 4 4z"></path></symbol><symbol id="icon-file-picture" viewBox="0 0 24 24"><path d="M15 7V2l5 5h-5zM6 20l3-4 2 2 4-5 3 7H6zM8.5 9a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm7.91-8H5.01a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5.6L16.4 1z"></path></symbol><symbol id="icon-file-sound" viewBox="0 0 24 24"><path d="M15 7V2l5 5h-5zm.63 5.26L13 11.4v6.11a2.5 2.5 0 1 1-2-2.45V8.61l5.27 1.76-.64 1.9zM16.41 1H5.01a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5.6L16.4 1z"></path></symbol><symbol id="icon-file-video" viewBox="0 0 24 24"><path d="M16.41 1l4.6 4.59V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h11.4zm-1.4 6h5l-5-5v5zm2 11v-6l-4 2.25V12H7v6h6v-2.25L17 18z"></path></symbol><symbol id="icon-file-presentation" viewBox="0 0 24 24"><path d="M15 7V2l5 5h-5zM8 18v-8l8 4-8 4zm8.41-17H5.01a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5.6L16.4 1z"></path></symbol><symbol id="icon-file-zip" viewBox="0 0 24 24"><path d="M16.41 1L21 5.59V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h11.41zM15 7h5l-5-5v5zm2.25 11.5a2.25 2.25 0 0 0 0-4.5H15v6h1.5v-1.5h.75zm-3.25-3V14h-3v1.5h.75v3H11V20h3v-1.5h-.75v-3H14zM9.5 20v-1.5H7.15l2.22-3.33A.75.75 0 0 0 8.75 14H5v1.5h2.35l-2.22 3.33A.75.75 0 0 0 5.75 20H9.5zm7.75-4.5a.75.75 0 0 1 0 1.5h-.75v-1.5h.75z"></path></symbol><symbol id="icon-file-spreadsheet" viewBox="0 0 24 24"><path d="M15 7V2l5 5h-5zm3 12H6v-2h2V8h2v9h1v-4h2v4h1v-6h2v6h2v2zM16.41 1H5a2 2 0 0 0-2 2v18c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V5.59L16.41 1z"></path></symbol><symbol id="icon-file" viewBox="0 0 24 24"><path d="M2 12.5A5.5 5.5 0 0 1 7.5 7H18a4 4 0 1 1 0 8H9.5a2.5 2.5 0 0 1 0-5H17v2H9.41c-.55 0-.55 1 0 1H18a2 2 0 0 0 0-4H7.5a3.5 3.5 0 0 0 0 7H17v2H7.5A5.5 5.5 0 0 1 2 12.5z"></path></symbol><symbol id="icon-flow" viewBox="0 0 24 24"><path d="M13 3a9 9 0 0 0-9 9H1l3.89 3.89.07.14L9 12H6a7 7 0 1 1 2.06 4.94l-1.42 1.42A9 9 0 1 0 13 3zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"></path></symbol><symbol id="icon-forecast" viewBox="0 0 24 24"><path d="M4.93 4.93a10 10 0 0 1 14.15 0l2.37-2.36v6.28h-6.3L17.5 6.5a7.78 7.78 0 1 0 2.27 5.5H22A10 10 0 1 1 4.93 4.93zm7.33 6.4c1.48.36 3.07.95 3.07 2.7 0 1.27-1.01 1.97-2.29 2.2v1.33h-1.96v-1.34c-1.26-.26-2.33-1.02-2.41-2.37h1.44c.07.73.6 1.3 1.95 1.3 1.45 0 1.77-.68 1.77-1.1 0-.58-.33-1.12-1.97-1.5-1.82-.4-3.08-1.12-3.08-2.54 0-1.2 1.03-1.97 2.3-2.23V6.44h1.96V7.8c1.37.31 2.06 1.29 2.1 2.35H13.7c-.04-.77-.48-1.3-1.64-1.3-1.1 0-1.77.47-1.77 1.14 0 .6.48.97 1.97 1.33z"></path></symbol><symbol id="icon-filter" viewBox="0 0 24 24"><path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"></path></symbol><symbol id="icon-folder" viewBox="0 0 24 24"><path d="M10 4H4a2 2 0 0 0-1.99 2L2 18c0 1.1.9 2 2 2h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-8l-2-2z"></path></symbol><symbol id="icon-fullscreen" viewBox="0 0 24 24"><path d="M4 10V5h6v2H6v3H4zm0 4h2v3h4v2H4v-5zm16-4h-2V7h-4V5h6v5zm0 4v5h-6v-2h4v-3h2z"></path></symbol><symbol id="icon-forward" viewBox="0 0 24 24"><path d="M12 9V4l8 8-8 8v-5H4V9z"></path></symbol><symbol id="icon-help-outline" viewBox="0 0 24 24"><path d="M11 18h2v-2h-2v2zm1-16a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8.01 8.01 0 0 1 0-16 8.01 8.01 0 0 1 0 16zm0-14a4 4 0 0 0-4 4h2c0-1.1.9-2 2-2a2 2 0 0 1 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5a4 4 0 0 0-4-4z"></path></symbol><symbol id="icon-goal" viewBox="0 0 24 24"><path d="M16 9.23l-2.96 2.97a1.76 1.76 0 1 1-1.24-1.24l2.97-2.97V6.34L19.1 2l.2 2.69 2.69.2-4.34 4.34H16zm-2.52-2.02l-1.41 1.41a4.09 4.09 0 1 0 3.31 3.3l1.4-1.41a5.83 5.83 0 0 1-5.43 7.98 5.84 5.84 0 1 1 2.13-11.28zm1.55-3.16l-1.36 1.36a7.6 7.6 0 1 0 4.94 4.98l1.36-1.36a9.35 9.35 0 1 1-4.94-4.97z"></path></symbol><symbol id="icon-inbox" viewBox="0 0 24 24"><path d="M3 5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5zm2 0v10h4a3 3 0 1 0 6 0h4V5H5z"></path></symbol><symbol id="icon-help" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92A3.4 3.4 0 0 0 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41a2 2 0 0 0-2-2 2 2 0 0 0-2 2H8a4 4 0 1 1 8 0c0 .88-.36 1.68-.93 2.25z"></path></symbol><symbol id="icon-gift" viewBox="0 0 24 24"><path d="M10.04 8H13v5h7V8h-5.08L17 10.83 15.38 12 13 8.76h-2V8h-.96zM20 6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2l.01-12c0-1.11.88-2 1.99-2h2.18a3 3 0 0 1 5.32-2.66l.5.68.5-.67A3 3 0 0 1 17.82 6H20zm-5.7-1.7c-.27.25-.67.81-1.22 1.68 1.5.08 2.37-.01 2.63-.27a1 1 0 0 0 0-1.42 1 1 0 0 0-1.42 0zm-4.6 0a1 1 0 0 0-1.4 0 1 1 0 0 0 0 1.4c.3.34 1.21.43 2.71.28a19.68 19.68 0 0 0-1.3-1.69zM20 20v-5h-7v5h7zm-9 0v-5H4v5h7zm-.96-12H4v5h7V8.76L9 12l-2-1.17L9.08 8h.96z"></path></symbol><symbol id="icon-info-outline" viewBox="0 0 24 24"><path d="M11 17h2v-6h-2v6zm1-15a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8.01 8.01 0 0 1 0-16 8.01 8.01 0 0 1 0 16zM11 9h2V7h-2v2z"></path></symbol><symbol id="icon-info" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"></path></symbol><symbol id="icon-invoice" viewBox="0 0 24 24"><path d="M20 4v18l-2-2-2 2-2-2-2 2-2-2-2 2-2-2-2 2V2l2 2 2-2 2 2 2-2 2 2 2-2 2 2 2-2v2zM7 7v2h10V7H7zm0 4v2h10v-2H7zm4 4v2h6v-2h-6z"></path></symbol><symbol id="icon-italic" viewBox="0 0 24 24"><path d="M10 5v3h2.21l-3.42 8H6v3h8v-3h-2.21l3.42-8H18V5z"></path></symbol><symbol id="icon-largetext" viewBox="0 0 24 24"><path d="M9 4v3h5v12h3V7h5V4H9zm-6 8h3v7h3v-7h3V9H3v3z"></path></symbol><symbol id="icon-lead" viewBox="0 0 24 24"><path d="M13 20.95V23h-2v-2.05A9 9 0 0 1 3.05 13H1v-2h2.05A9 9 0 0 1 11 3.05V1h2v2.05A9 9 0 0 1 20.95 11H23v2h-2.05A9 9 0 0 1 13 20.95zM12 19a7 7 0 1 0 0-14 7 7 0 0 0 0 14zm0-3a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"></path></symbol><symbol id="icon-linegraph" viewBox="0 0 24 24"><path d="M17.3 9.3L15 7h6v6l-2.3-2.3-5.7 5.71-4-4-5.3 5.3-1.4-1.42L9 9.6l4 4 4.3-4.3z"></path></symbol><symbol id="icon-link" viewBox="0 0 24 24"><path d="M7 7h4v2H7a3 3 0 1 0 0 6h4v2H7A5 5 0 0 1 7 7zm10 8a3 3 0 1 0 0-6h-4V7h4a5 5 0 0 1 0 10h-4v-2h4zm-1-4v2H8v-2h8z"></path></symbol><symbol id="icon-link-tracking" viewBox="0 0 24 24"><path d="M7.42 4.67a.69.69 0 0 1-.68-.69v-2.3a.69.69 0 1 1 1.37 0v2.3c0 .38-.3.7-.69.7zm-4.54-.81a.69.69 0 0 1 .98-.98L5.48 4.5a.69.69 0 1 1-.98.98L2.88 3.86zm6.5 1.62a.69.69 0 0 1 0-.98l1.61-1.62a.69.69 0 1 1 .98.98l-1.63 1.62a.69.69 0 0 1-.97 0zm-6.5 5.51L4.5 9.37a.69.69 0 1 1 .98.97l-1.62 1.63a.69.69 0 1 1-.98-.98zm-1.2-4.25h2.3a.69.69 0 1 1 0 1.37h-2.3a.69.69 0 1 1 0-1.37zm13.53 8.47L12.61 23 7.43 7.42 23 12.62l-7.79 2.6z"></path></symbol><symbol id="icon-list-bulleted" viewBox="0 0 24 24"><path d="M3.5 12a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0zm0-6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0zm0 12c0-.82.67-1.5 1.5-1.5s1.5.68 1.5 1.5-.68 1.5-1.5 1.5-1.5-.68-1.5-1.5zM9 19v-2h12v2H9zm0-6v-2h12v2H9zm0-8h12v2H9V5z"></path></symbol><symbol id="icon-list-numbered" viewBox="0 0 24 24"><path d="M3 17h2v.5H4v1h1v.5H3v1h3v-4H3v1zm1-9h1V4H3v1h1v3zm-1 3h1.8L3 13.1v.9h3v-1H4.2L6 10.9V10H3v1zm6-6v2h12V5H9zm0 14h12v-2H9v2zm0-6h12v-2H9v2z"></path></symbol><symbol id="icon-link-off" viewBox="0 0 24 24"><path d="M2 4.5l1.25-1.25 17.5 17.5L19.5 22l-5-5H13v-1.5L10.5 13H8v-2h.5L6.54 9.04A3 3 0 0 0 7 15h4v2H7a5 5 0 0 1-2.06-9.56L2 4.5zM9.5 7H11v1.5L9.5 7zm4 4H16v2h-.5l-2-2zm3.96 3.96A3 3 0 0 0 17 9h-4V7h4a5 5 0 0 1 2.06 9.56l-1.6-1.6z"></path></symbol><symbol id="icon-locked" viewBox="0 0 24 24"><path d="M17 8V6A5 5 0 0 0 7 6v2H6a2 2 0 0 0-2 2v10c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2h-1zm-5 9a2 2 0 0 1-2-2c0-1.1.9-2 2-2a2 2 0 0 1 2 2 2 2 0 0 1-2 2zm3.1-9H8.9V6a3.1 3.1 0 0 1 6.2 0v2z"></path></symbol><symbol id="icon-list" viewBox="0 0 24 24"><path d="M4 15h16v-2H4v2zm0 4h16v-2H4v2zm0-8h16V9H4v2zm0-6v2h16V5H4z"></path></symbol><symbol id="icon-logout" viewBox="0 0 24 24"><path d="M20 19V5a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v4h2V5h12v14H6v-4H4v4c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2zm-4-7l-4-4v3H4v2h8v3l4-4z"></path></symbol><symbol id="icon-microphone" viewBox="0 0 24 24"><path d="M12 14a2.99 2.99 0 0 0 2.99-3L15 5a3 3 0 1 0-6 0v6a3 3 0 0 0 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"></path></symbol><symbol id="icon-logo-p" viewBox="0 0 24 24"><path d="M10.15 4.41c-.06-.53-.41-1.18-1.8-1.18H5v2.91h1.37c.21 0 .29.12.29.32v14.56h3.72v-5.94a5.04 5.04 0 0 0 3.38 1.22c3.49 0 5.76-2.77 5.76-6.73 0-4.02-2.2-6.72-5.64-6.72-2 0-3.16.94-3.73 1.56zm3.05 1.6c1.69 0 2.82 1.45 2.82 3.61 0 2.47-1.44 3.57-2.87 3.57-1.91 0-2.79-1.84-2.79-3.54C10.36 6.96 11.83 6 13.2 6z"></path></symbol><symbol id="icon-minus" viewBox="0 0 24 24"><path d="M19 13H5v-2h14z"></path></symbol><symbol id="icon-microphone-off" viewBox="0 0 24 24"><path d="M19 11c0 1.19-.34 2.3-.9 3.28l-1.23-1.23c.27-.62.43-1.31.43-2.05H19zm-4.02.17L9 5.18V5a3 3 0 1 1 6 0v6l-.02.17zM4.27 3L21 19.73 19.73 21l-4.19-4.18c-.77.45-1.63.77-2.54.9V21h-2v-3.28c-3.28-.49-6-3.31-6-6.72h1.7c0 3 2.54 5.1 5.3 5.1.81 0 1.6-.19 2.31-.52l-1.66-1.66A2.99 2.99 0 0 1 9.01 11v-.72L3 4.27 4.27 3z"></path></symbol><symbol id="icon-move" viewBox="0 0 24 24"><path d="M11 18v-5H6v3l-4-4 4-4v3h5V6H8l4-4 4 4h-3v5h5V8l4 4-4 4v-3h-5v5h3l-4 4-4-4z"></path></symbol><symbol id="icon-monetary" viewBox="0 0 24 24"><path d="M12.48 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21a3.99 3.99 0 0 0-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1H7c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path></symbol><symbol id="icon-move-to-inbox" viewBox="0 0 24 24"><path d="M9 3v2H4.99v10H9a3 3 0 0 0 6 0h4V5h-4V3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4.99A2 2 0 0 1 3 19l.01-14c0-1.1.87-2 1.98-2H9zm5 0v5h2l-4 4-4-4h2V3h4z"></path></symbol><symbol id="icon-numerical" viewBox="0 0 24 24"><path d="M10 12h4v2H8v-3a2 2 0 0 1 2-2h2V8H8V6h4a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-2v1zm-3 2H5V8H3V6h4v8zm14-2v1c0 .65-.31.88-.8.96-.33.06-.75.04-1.2.04h-4v-2h4v-1h-2V9h2V8h-4V6h4a2 2 0 0 1 2 2v.5c0 .83-.67 1.5-1.5 1.5.83 0 1.5.67 1.5 1.5v.5zM3 16h18v2H3v-2z"></path></symbol><symbol id="icon-note" viewBox="0 0 24 24"><path d="M3 5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v11.28L16.26 21H5a2 2 0 0 1-2-2V5zm4 2v2h10V7H7zm0 4v2h6v-2H7zm8 4v5l5-5h-5z"></path></symbol><symbol id="icon-outbox" viewBox="0 0 24 24"><path d="M9.5 3l-2 2H4.99v10H9a3 3 0 0 0 6 0h4V5h-2.5l-2-2H19a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4.99A2 2 0 0 1 3 19l.01-14c0-1.1.87-2 1.98-2H9.5zm4.5 9h-4V7H8l4-4 4 4h-2v5z"></path></symbol><symbol id="icon-organization" viewBox="0 0 24 24"><path d="M12 7V3H2v18h20V7H12zM6 19H4v-2h2v2zm0-4H4v-2h2v2zm0-4H4V9h2v2zm0-4H4V5h2v2zm4 12H8v-2h2v2zm0-4H8v-2h2v2zm0-4H8V9h2v2zm0-4H8V5h2v2zm10 12h-8v-2h2v-2h-2v-2h2v-2h-2V9h8v10zm-2-8h-2v2h2v-2zm0 4h-2v2h2v-2z"></path></symbol><symbol id="icon-open-tracking" viewBox="0 0 24 24"><path d="M23 12c-1 3-4.92 7.5-11 7.5S2 15 1 12c1-3 4.92-7.5 11-7.5S22 9 23 12zm-6 0a5 5 0 1 0-10 0 5 5 0 0 0 10 0zm-5 3a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path></symbol><symbol id="icon-pencil" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a1 1 0 0 0 0-1.41l-2.34-2.34a1 1 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path></symbol><symbol id="icon-pause" viewBox="0 0 24 24"><path d="M6 19h4V5H6v14zm8-14v14h4V5h-4z"></path></symbol><symbol id="icon-pin" viewBox="0 0 24 24"><path d="M3 21l7.07-5.14-1.93-1.93L3 21zM14.6 3a3.64 3.64 0 0 0-.9 3.32L10.63 9.4a5.34 5.34 0 0 0-1.62-.26c-1.13 0-2.2.39-3 1.19L13.68 18a4.5 4.5 0 0 0 .93-4.62l3.07-3.07c.27.05.55.08.82.08.94 0 1.84-.32 2.5-.99L14.6 3z"></path></symbol><symbol id="icon-personadd" viewBox="0 0 24 24"><path d="M15 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></symbol><symbol id="icon-person" viewBox="0 0 24 24"><path d="M12 12a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9zm0 2c-3 0-9 1.56-9 4.67V21h18v-2.33c0-3.1-6-4.67-9-4.67z"></path></symbol><symbol id="icon-pipeline" viewBox="0 0 24 24"><path d="M14 4h-4v16h4V4zm6 0h-4v8h4V4zM8 15V4H4v11h4z"></path></symbol><symbol id="icon-play-video" viewBox="0 0 24 24"><path d="M10 16.5l6-4.5-6-4.5v9zM12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8.01 8.01 0 0 1 0-16 8.01 8.01 0 0 1 0 16z"></path></symbol><symbol id="icon-play" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"></path></symbol><symbol id="icon-product" viewBox="0 0 24 24"><path d="M2 21V10h20v11a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11-5v3h6v-3h-6zm8.54-8H13V2h4a1 1 0 0 1 .83.45L21.53 8zM11 8H2.46l3.7-5.55A1 1 0 0 1 7 2h4v6z"></path></symbol><symbol id="icon-quick-actions" viewBox="0 0 24 24"><path d="M8 22v2l-3-3 3-3v2h11c.5 0 1-.5 1-1V7l2-2v14a3 3 0 0 1-3 3H8zm8-20V0l3 3-3 3V4H5c-.5 0-1 .5-1 1v12l-2 2V5a3 3 0 0 1 3-3h11zm1 11h-4v4h-2v-4H7v-2h4V7h2v4h4v2z"></path></symbol><symbol id="icon-redirect" viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"></path></symbol><symbol id="icon-refresh" viewBox="0 0 24 24"><path d="M17.66 14a6 6 0 1 1-1.42-6.24L14 10h6V4l-2.34 2.34A8 8 0 1 0 19.75 14h-2.1z"></path></symbol><symbol id="icon-plus" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path></symbol><symbol id="icon-reply" viewBox="0 0 24 24"><path d="M10 5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11V5z"></path></symbol><symbol id="icon-replyall" viewBox="0 0 24 24"><path d="M7 8V5l-7 7 7 7v-3l-4-4 4-4zm6 1V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"></path></symbol><symbol id="icon-report" viewBox="0 0 24 24"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5c0-1.1.9-2 2-2h14zm0 16V5H5v14h14zM7 10h2v7H7v-7zm4-3h2v10h-2V7zm4 6h2v4h-2v-4z"></path></symbol><symbol id="icon-search" viewBox="0 0 24 24"><path d="M16.15 14.7h-.77l-.27-.27a6.32 6.32 0 1 0-.68.68l.26.27v.77L19.55 21 21 19.55l-4.85-4.86zm-5.9-.2a4.24 4.24 0 1 1-.01-8.49 4.24 4.24 0 0 1 .01 8.5z"></path></symbol><symbol id="icon-result" viewBox="0 0 24 24"><path d="M11.8 14.51l4.7-8.14L17.87 6l.36 1.37-4.6 7.97a2 2 0 1 1-1.83-.83zm5.85-2.14l1.07-1.85A8.97 8.97 0 0 1 21 16.5h-2c0-1.54-.5-2.97-1.35-4.13zm-5.27-2.86L12 9.5a7 7 0 0 0-7 7H3a9 9 0 0 1 10.47-8.88l-1.1 1.89zM7 16.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm3-3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm7 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path></symbol><symbol id="icon-resize" viewBox="0 0 24 24"><path d="M16 9a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0 8a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0-4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm-4 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0-4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm-4 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path></symbol><symbol id="icon-share" viewBox="0 0 24 24"><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7 0-.24-.04-.47-.09-.7l7.05-4.11A2.99 2.99 0 0 0 21 5a3 3 0 1 0-5.91.7L8.04 9.81A2.99 2.99 0 0 0 3 12a3 3 0 0 0 5.04 2.19l7.12 4.16A2.92 2.92 0 1 0 18 16.08z"></path></symbol><symbol id="icon-signature" viewBox="0 0 24 24"><path d="M11.76 7.12a31.2 31.2 0 0 1-1.49 4.3l-.1.24a27.14 27.14 0 0 0-1.52 4.71c-.35 1.85.01 3.2 1.5 3.57 2.2.56 3.43-.93 4.97-4.42l.45-1.04c.17-.4.3-.68.43-.94.3-.62.54-1.03.75-1.25.08-.1.02-.07-.06-.1.25.1.33.68.1 2.1l-.1.5c-.2 1.15-.26 1.49-.26 1.98 0 .95.33 1.69 1.22 1.93l.36.06c1.03.12 1.98-.37 2.88-1.2a7.5 7.5 0 0 0 1-1.11 1 1 0 1 0-1.63-1.16l-.19.24c-.16.19-.34.38-.53.56a2.7 2.7 0 0 1-1.1.68c0-.32.04-.64.22-1.63a40 40 0 0 0 .1-.53c.39-2.34.2-3.7-1.36-4.3-1.4-.52-2.26.4-3.2 2.37-.14.28-.28.59-.46 1l-.45 1.03c-1.13 2.54-1.9 3.49-2.65 3.3-.05-.02-.05-.02-.07-.11-.07-.23-.06-.63.04-1.16.2-1 .59-2.16 1.43-4.35l.1-.25c1-2.58 1.32-3.5 1.57-4.59.41-1.83.15-3.14-1.32-3.47-4.2-.93-8.14 6.32-10.36 14.63a1 1 0 1 0 1.94.52c1.86-6.97 5.43-13.58 7.9-13.21.03.21 0 .59-.11 1.1z"></path></symbol><symbol id="icon-singleoption" viewBox="0 0 24 24"><path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0-5a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"></path></symbol><symbol id="icon-sm-ac-brush" viewBox="0 0 16 16"><path d="M2.67 11.33c0 .88-.98 1.16-1.54 1.16A4.06 4.06 0 0 0 4 14c1.47 0 2.67-1.2 2.67-2.67a2 2 0 1 0-4 0zM12.9 2.2a.66.66 0 0 0-.94 0L6 8.17 7.83 10l5.98-5.97a.66.66 0 0 0 0-.94l-.9-.9z"></path></symbol><symbol id="icon-sm-ac-bell" viewBox="0 0 16 16"><path d="M10.36 9.1v1.4c0 .83.76 1.44 1.6 1.44v.73H3.98v-.73c.83 0 1.59-.61 1.59-1.45V9.1a2.39 2.39 0 0 1 4.78 0zM2.82 8.07c.3-1.8 1.46-3.3 3.13-4.02l.53 1.22a4.01 4.01 0 0 0-2.35 3l-1.3-.2zm9 .2a4.01 4.01 0 0 0-2.33-3l.53-1.22a5.28 5.28 0 0 1 3.12 4.01l-1.31.22zm2.85.38a6.66 6.66 0 0 0-4.83-6.38L10.21 1A8 8 0 0 1 16 8.66h-1.33zm-13.34 0H0A7.97 7.97 0 0 1 5.8 1l.36 1.28a6.66 6.66 0 0 0-4.83 6.38zM7.97 15c-.73 0-1.33-.6-1.33-1.33H9.3c0 .74-.6 1.33-1.33 1.33z"></path></symbol><symbol id="icon-sm-ac-bubble" viewBox="0 0 16 16"><path d="M6 5.65V10h-.99l-2 2v-2H2c-.45 0-.97-.48-.97-1.01V2c0-.56.6-.95.98-.95h10c.36 0 .97.58.97.95v2.98H6.67c-.37 0-.67.3-.67.67zM8 6h6c.37 0 .97.53.97 1.02V11c0 .6-.57 1-.97 1h-1v2l-2.03-2H8c-.37 0-.97-.51-.97-1V7.02C7.03 6.5 7.49 6 8 6z"></path></symbol><symbol id="icon-sm-ac-bulb" viewBox="0 0 16 16"><path d="M12 5.04c0 2.67-2 3.29-2 5.96H6c0-2.67-2.02-3.3-2.02-5.96s1.62-4 4.01-4c2.4 0 4 1.5 4 4zm-6 8.8c0 .17.22.45.4.51l1.46.61a.45.45 0 0 0 .28 0l1.44-.53c.18-.06.42-.42.42-.6V12H6v1.83z"></path></symbol><symbol id="icon-sm-ac-calendar" viewBox="0 0 16 16"><path d="M13 6H9.97V5H13v1zm-2.93-3.97c-.18 0-.7.17-1.09.67L8 3.6l-1-.9c-.31-.44-.8-.67-.97-.67H2c-.06 0-.98.58-.98.97v8.01c0 .37.61.99.98.99h3.64l1.89 1.74c.13.13.3.3.47.3.17 0 .34-.17.47-.3L10.53 12H14c.37 0 .98-.62.98-.99V3c0-.6-.49-.97-.98-.97h-3.93z"></path></symbol><symbol id="icon-sm-ac-call" viewBox="0 0 16 16"><path d="M6.5 5c0 .38-1.13 1.5-1.13 1.88C5.75 8 8 10.25 9.13 10.63c.38 0 1.5-1.13 1.88-1.13.75.38 2.25 1.5 3 2.25 0 .75-1.5 2.25-2.25 2.25C8 13.25 2.75 8 2 4.25 2 3.5 3.5 2 4.25 2 5 2.38 6.13 4.25 6.5 5z"></path></symbol><symbol id="icon-sm-ac-camera" viewBox="0 0 16 16"><path d="M6.12 2h3.86l2.06 2.04 1.5-.04c.83.04 1.46.27 1.46 1v8.04c0 .74-.72.96-1.46.96H2.5c-.73 0-1.49-.22-1.49-.96L1 5c.01-.73.72-.96 1.5-.96H4L6.13 2zM4.75 9a3.26 3.26 0 1 0 6.53 0 3.26 3.26 0 0 0-6.53 0zm3.27 2.16a2.14 2.14 0 1 1 0-4.28 2.14 2.14 0 0 1 0 4.28z"></path></symbol><symbol id="icon-sm-ac-car" viewBox="0 0 16 16"><path d="M11.63 2H4.29a1 1 0 0 0-.94.67L2 7.33l-.01 5c0 .37.3.67.66.67h.67c.37 0 .67-.3.67-.67L4 12h8v.33c0 .37.3.67.66.67h.67c.36 0 .66-.3.66-.67l.01-5-1.43-4.66a1 1 0 0 0-.94-.67zM4 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm8 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM4.77 2.98h6.5L12.05 6H3.94l.83-3.03z"></path></symbol><symbol id="icon-sm-ac-cart" viewBox="0 0 16 16"><path d="M5.39 3h7.87a.5.5 0 0 1 .47.69L12 8H5.75L5 9h6l1 2H5a2 2 0 0 1-1.6-3.2l1-1.32-1.35-3.35a1 1 0 0 0-.5-.13H1V1h1.56a3 3 0 0 1 2.83 2zM4.5 15a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm6 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></symbol><symbol id="icon-sm-ac-checkbox" viewBox="0 0 16 16"><path d="M13.67 1C14.4 1 15 1.6 15 2.33v11.34c0 .73-.6 1.33-1.33 1.33H2.33C1.6 15 1 14.4 1 13.67V2.33C1 1.6 1.6 1 2.33 1h11.34zm-8.2 5.75L4 8.2l3.26 3.16 4.95-4.91L10.75 5 7.26 8.52 5.47 6.75z"></path></symbol><symbol id="icon-sm-ac-deadline" viewBox="0 0 16 16"><path d="M9.4 3L9 1H2v14h2V9h3.6l.4 2h6V3z"></path></symbol><symbol id="icon-sm-ac-clip" viewBox="0 0 16 16"><path d="M10 2c0-.8-.44-2-2-2S6.01 1.3 6.01 2h-2C2.61 2 2 2.42 2 3.98v10c0 1.27.5 2 2.01 2h8.01c1.58 0 1.98-.49 1.98-2v-10c0-1.39-.46-2-2-2h-2zM8.75 2c0 .42-.33.75-.75.75A.75.75 0 0 1 7.25 2c0-.4.34-.75.75-.75.42 0 .75.34.75.75zM3.5 14.55V3.53H5V5h6V3.53h1.53v11.02H3.5z"></path></symbol><symbol id="icon-sm-ac-addressbook" viewBox="0 0 16 16"><path d="M1 13.67C1 14.4 1.6 15 2.33 15h11.34c.73 0 1.33-.6 1.33-1.33V2.33C15 1.6 14.4 1 13.67 1H2.33C1.6 1 1 1.6 1 2.33v11.34zM8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1.27c1.33 0 4 .73 4 2.06V12H4v-.67C4 10 6.67 9.27 8 9.27z"></path></symbol><symbol id="icon-sm-ac-document" viewBox="0 0 16 16"><path d="M3 1h8l3 3v10a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm1 12h8v-2H4v2zm0-3h6V8H4v2zm6-8v3h3l-3-3z"></path></symbol><symbol id="icon-sm-ac-downarrow" viewBox="0 0 16 16"><path d="M13.7 3.49l-.93-1.12A.97.97 0 0 0 12 2H4a1 1 0 0 0-.77.37L2.3 3.49c-.2.21-.3.51-.3.84v8.34C2 13.4 2.6 14 3.33 14h9.34c.73 0 1.33-.6 1.33-1.33V4.33c0-.32-.11-.62-.3-.84zM4.62 8.04h2.4v-1.4h2.03v1.4h2.45L8 11.77 4.63 8.04zM3.99 3h8.06v.98H4V3z"></path></symbol><symbol id="icon-sm-ac-email" viewBox="0 0 16 16"><path d="M11.22 4.57l-5.7 5.38c-.28.2-.45.6-.45.94v2.73c0 .4.21.51.53.24l1.8-2.32 1.93 1.81c.15.14.33.1.4-.09l4.25-11.02c.07-.2-.03-.29-.23-.22L2.18 6.2c-.2.07-.24.25-.09.39l1.45 1.36c.16.14 1.18.1 1.37 0l6.22-3.51c.37-.2.41-.14.09.13z"></path></symbol><symbol id="icon-sm-ac-finish" viewBox="0 0 16 16"><path d="M10.98 13.02h1V15H4.03v-1.98h1v-1.34c0-.37.6-.66.97-.66h1.01v-1c-.99-.16-1.54-.78-2.14-1.54L1.32 5.85a.67.67 0 0 1-.25-.52V2.67c0-.37.3-.67.66-.67H4.2c.23-.4.65-1 1.14-1h5.34c.49 0 .91.6 1.14 1h2.5c.36 0 .66.3.66.67v2.66c0 .2-.09.4-.25.52l-3.59 2.63c-.6.76-1.17 1.38-2.16 1.55v.99H10c.37 0 .98.3.98.66v1.34zm3.05-8.03V3H12v3.03L14.03 5zM2.03 5L4 6.05V2.99H2.03V5z"></path></symbol><symbol id="icon-sm-ac-key" viewBox="0 0 16 16"><path d="M6.7 10.74c-.4.38-1.04.38-1.44 0a.97.97 0 0 1 0-1.4c.4-.38 1.04-.38 1.44 0 .4.39.4 1.01 0 1.4zm2.38-1.78l1.43-1.4-.95-.92.95-.94.96.94.95-.94-.95-.93.95-.93.96.93.95-.93-1.9-1.86L7.16 7.1l-.48-.46a1.38 1.38 0 0 0-1.9 0l-2.4 2.32a1.3 1.3 0 0 0 0 1.86l2.87 2.8c.53.5 1.38.5 1.91 0l2.39-2.33a1.3 1.3 0 0 0 0-1.86l-.48-.47z"></path></symbol><symbol id="icon-sm-ac-linegraph" viewBox="0 0 16 16"><path d="M12.47 5.47L11 4h4v4l-1.47-1.47L9 11.06l-3-3-4.47 4.47-1.06-1.06L6 5.94l3 3 3.47-3.47z"></path></symbol><symbol id="icon-sm-ac-loop" viewBox="0 0 16 16"><path d="M12.25 8H10l3-3 3 3h-2.25a5.75 5.75 0 0 1-8.7 4.94l1.12-1.1A4.25 4.25 0 0 0 12.25 8zm-10 0a5.75 5.75 0 0 1 8.7-4.94l-1.12 1.1A4.25 4.25 0 0 0 3.75 8L6 8.01l-3 3-3-3h2.25z"></path></symbol><symbol id="icon-sm-ac-lunch" viewBox="0 0 16 16"><path d="M7.29 7L2.2 1.98c-.89 1.64-1.06 2.35.16 3.95L5.4 8.9l1.89-1.88zm6.38-.1c1.27-1.28 1.9-3.47.88-4.46-1.01-1-3.38-.49-4.66.79-1.06 1.06-1.39 2.49-.92 3.51l-6.5 6.5.94.95L8 9.6l4.59 4.58.94-.94-4.59-4.58.98-.98c1.02.47 2.69.26 3.75-.8z"></path></symbol><symbol id="icon-sm-ac-meeting" viewBox="0 0 16 16"><path d="M10.98 7.02a2 2 0 0 0 2-2 2 2 0 1 0-2 2zm-5.96 0a2 2 0 0 0 2-2 2 2 0 1 0-2 2zm-.04 1.65C3.42 8.67.3 9.45.3 11v1.67h9.33V11c0-1.55-3.11-2.33-4.66-2.33zm5.96 0l-.65.03c.77.56 1.31 1.31 1.31 2.3v1.67h4V11c0-1.55-3.1-2.33-4.66-2.33z"></path></symbol><symbol id="icon-sm-ac-padlock" viewBox="0 0 16 16"><path d="M11.33 4.99V4a3.33 3.33 0 1 0-6.66 0v.99H4c-.97 0-1.97 1-1.97 2.02v5.9C2.03 14.34 3.01 15 4 15h8c1 0 1.98-1.01 1.98-2.01V7c0-.94-.96-2.02-1.98-2.02h-.67zm-3.32 6.56a1.5 1.5 0 0 1-1.5-1.5c0-.82.68-1.5 1.5-1.5a1.5 1.5 0 1 1 0 3zM10 5H6V4c0-1 .86-1.99 2-1.99 1.14 0 2 .99 2 1.99v1z"></path></symbol><symbol id="icon-sm-ac-picture" viewBox="0 0 16 16"><path d="M14 12V4.03C14 2.51 13.46 2 12.02 2h-8C2.47 2 2 2.57 2 4.03V12c0 1.48.51 2 2.01 2h8.01c1.46 0 1.98-.47 1.98-2zm-6.75-1.46L9.67 8 13 12H3l2.66-3 1.58 1.54z"></path></symbol><symbol id="icon-sm-ac-plane" viewBox="0 0 16 16"><path d="M13.99 9L8.93 6l.08-3.66c0-.75-.5-1.34-1.02-1.34s-.95.53-.95 1.34V6L1.99 9v1.66L7.04 9v3.67l-1 .37V15L8 14l1.99 1v-1.96l-1.05-.37V9L14 10.53V9z"></path></symbol><symbol id="icon-sm-ac-presentation" viewBox="0 0 16 16"><path d="M7.03 11.04l2.72-3-2.72-3v6zM3.4 1C1.66 1 1 1.6 1 3.35v9.27C1 14.38 1.58 15 3.4 15h9.27c1.76 0 2.33-.62 2.33-2.38V3.35C15 1.7 14.4 1 12.67 1H3.39zM13 13H3V3h10v10z"></path></symbol><symbol id="icon-sm-ac-pricetag" viewBox="0 0 16 16"><path d="M14.53 7.98l-6.56-6.6A1.32 1.32 0 0 0 7.03 1H2.37c-.74 0-1.34.6-1.34 1.33v4.66c0 .37.15.7.4.95l6.22 6.64a1.32 1.32 0 0 0 1.88 0l5-4.71a1.3 1.3 0 0 0 0-1.89zM4.04 5.47a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></symbol><symbol id="icon-sm-ac-scissors" viewBox="0 0 16 16"><path d="M6.68 5.35l7.99 7.98V14h-2L8 9.33l-1.32 1.32a3 3 0 1 1-1.33-1.33L6.67 8 5.35 6.68a3 3 0 1 1 1.33-1.33zM12.67 2h2v.67L10 7.33 8.67 6l4-4zM4 5.33a1.33 1.33 0 1 0 0-2.66 1.33 1.33 0 0 0 0 2.66zm0 8a1.33 1.33 0 1 0 0-2.66 1.33 1.33 0 0 0 0 2.66z"></path></symbol><symbol id="icon-sm-ac-search" viewBox="0 0 16 16"><path d="M10.58 9.26L14 12.68 12.68 14l-3.42-3.42a4.68 4.68 0 1 1 1.32-1.32zm-3.9.22a2.8 2.8 0 1 0 0-5.6 2.8 2.8 0 0 0 0 5.6z"></path></symbol><symbol id="icon-sm-ac-shuffle" viewBox="0 0 16 16"><path d="M6.88 5.86L2.99 1.98 1.93 3.04l3.88 3.88 1.07-1.06zm3-3.86l1.52 1.53L2 12.94 3.06 14l9.41-9.4L14 6.12V2H9.87zM9 10.06l2.35 2.34-1.54 1.54h4.13V9.82l-1.54 1.53L10.06 9 9 10.06z"></path></symbol><symbol id="icon-sm-ac-signpost" viewBox="0 0 16 16"><path d="M7.03 14.58c0 .23.45.42.64.42h.66c.19 0 .69-.2.69-.42v-2.54h-2v2.54zM4.4 8.03a.36.36 0 0 0-.2.07l-2 1.5c-.12.1-.2.25-.2.43s.08.34.2.43l2 1.5c.06.04.13.07.2.07h8.18c.23 0 .41-.23.41-.5v-3c0-.28-.18-.5-.4-.5H4.4zm2.62-5.02V1.4c0-.22.15-.4.33-.4h1.28c.19 0 .34.18.34.4V3h2.69c.07 0 .15.03.21.08l1.92 1.48c.12.1.2.26.2.43 0 .18-.08.34-.2.43l-1.7 1.5a.36.36 0 0 1-.22.07H3.44c-.23 0-.41-.22-.41-.5v-3c0-.27.18-.5.4-.5h3.59z"></path></symbol><symbol id="icon-sm-ac-smartphone" viewBox="0 0 16 16"><path d="M4.76 0C3.86 0 3 .9 3 1.89v12.23C3 15.1 4 16 4.9 16h6.19c.9 0 1.91-.9 1.91-1.88V1.89c0-1-.39-1.89-1.3-1.89H4.77zM8 15a1 1 0 1 1 0-1.99 1 1 0 0 1 0 2zm3-3H5V2.02L11 2v10z"></path></symbol><symbol id="icon-sm-ac-sound" viewBox="0 0 16 16"><path d="M2 6v4h2.67L8 14V2L4.67 6H2zm9 2.06c0-1.32-.82-2.45-2-3v6c1.18-.55 2-1.68 2-3zM9 2v1.4A4.82 4.82 0 0 1 12.57 8c0 2.17-1.5 4-3.57 4.6V14c2.86-.62 5-3.07 5-6a6.22 6.22 0 0 0-5-6z"></path></symbol><symbol id="icon-sm-ac-suitcase" viewBox="0 0 16 16"><path d="M9.02 10v-.97h4.92v4.95c0 .56-.31 1.02-.94 1.02H3.1c-.63 0-1.08-.24-1.08-1.02V9.03H7v.98h2.02zm2.89-5.97h1.95c.5 0 1.14.6 1.14 1.1V6.9c0 .54-.6 1.1-1.14 1.1H9V7H6.97v1H2.11C1.55 8 1 7.4 1 6.9V5c0-.56.48-.97 1-.97h2.04v-2c0-.58.4-1.03.93-1.03h5.96c.5 0 .98.49.98 1.02v2zm-1.92-.04V3H6.03v1H10z"></path></symbol><symbol id="icon-sm-ac-task" viewBox="0 0 16 16"><path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM2.48 8.04a5.5 5.5 0 1 1 11 0 5.5 5.5 0 0 1-11 0zM8.3 5.07H7.29V8l2.59 2.92.87-.82L8.3 7.68V5.07z"></path></symbol><symbol id="icon-sm-ac-tool" viewBox="0 0 16 16"><path d="M9.02 6.6a4.08 4.08 0 0 0-.95-4.38 4.2 4.2 0 0 0-4.7-.83L6.1 4.12 4.19 6.03 1.39 3.3A4.1 4.1 0 0 0 2.22 8a4.08 4.08 0 0 0 4.38.95l5.79 5.79c.25.25.63.25.89 0l1.46-1.47c.31-.25.31-.7.06-.89L9.02 6.6z"></path></symbol><symbol id="icon-sm-ac-uparrow" viewBox="0 0 16 16"><path d="M13.7 3.49l-.93-1.12A.97.97 0 0 0 12 2H4a1 1 0 0 0-.77.37L2.3 3.49c-.2.21-.3.51-.3.84v8.34C2 13.4 2.6 14 3.33 14h9.34c.73 0 1.33-.6 1.33-1.33V4.33c0-.32-.11-.62-.3-.84zm-2.32 6.75h-2.4v1.4H6.95v-1.4H4.5L8.01 6.5l3.37 3.74zM4 3h8.06v.98H4V3z"></path></symbol><symbol id="icon-sm-ac-truck" viewBox="0 0 16 16"><path d="M10 11H6a2 2 0 1 1-4 0H1V4c0-.5.6-1 1-1h8v2h2l3 3v3h-1a2 2 0 1 1-4 0zm-7-.06c0 .59.45 1.06 1 1.06.56 0 1-.47 1-1.06 0-.59-2-.59-2 0zm8 0c0 .59.45 1.06 1 1.06.56 0 1-.47 1-1.06 0-.59-2-.59-2 0zM12 6h-1v2h2V7l-1-1z"></path></symbol><symbol id="icon-sm-ac-wifi" viewBox="0 0 16 16"><path d="M2.28 7.45a8.04 8.04 0 0 1 11.46 0l1.2-1.39A9.62 9.62 0 0 0 1.11 6l1.16 1.46zm5.73 6.13l1.91-1.81a2.68 2.68 0 0 0-3.81 0l1.9 1.8zm-3.2-3.26a4.47 4.47 0 0 1 6.36 0l1.36-1.58a6.38 6.38 0 0 0-9 .1l1.28 1.48z"></path></symbol><symbol id="icon-sm-ac-world" viewBox="0 0 16 16"><path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM6.96 13.55C4.19 13.21 2.4 10.85 2.4 8c0-.43.06-.85.15-1.25L5.9 10.1v.84c0 .77 1.04 1.2 1.81 1.2v1.41h-.75zm3.84-2.75l-.8.2.1-2.3a.7.7 0 0 0-.7-.7H4.98V6.95h1.87c.38 0 .45-.6.45-1V4.5h1.47c.77 0 1.33-.63 1.33-1.4v-.29a5.6 5.6 0 0 1 2.03 8.96 1.4 1.4 0 0 0-1.33-.97z"></path></symbol><symbol id="icon-sm-archive" viewBox="0 0 16 16"><path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2H1V3zm1 3h12v8a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6zm8 3H6v2h4V9z"></path></symbol><symbol id="icon-sm-apps" viewBox="0 0 16 16"><path d="M2 2h3v3H2V2zm4.5 0h3v3h-3V2zM11 2h3v3h-3V2zM2 6.5h3v3H2v-3zm4.5 0h3v3h-3v-3zm4.5 0h3v3h-3v-3zM2 11h3v3H2v-3zm4.5 0h3v3h-3v-3zm4.5 0h3v3h-3v-3z"></path></symbol><symbol id="icon-sm-arrow-back" viewBox="0 0 16 16"><path d="M14 7H5.83l3.59-3.59L8 2 2 8l6 6 1.41-1.41L5.83 9H14z"></path></symbol><symbol id="icon-sm-arrow-down" viewBox="0 0 16 16"><path d="M11.29 5.29l1.42 1.42L8 11.41l-4.71-4.7 1.42-1.42L8 8.59z"></path></symbol><symbol id="icon-sm-arrow-left" viewBox="0 0 16 16"><path d="M7.41 8l3.3 3.29-1.42 1.42L4.59 8l4.7-4.71 1.42 1.42z"></path></symbol><symbol id="icon-sm-arrow-right" viewBox="0 0 16 16"><path d="M7.88 8l-3.3 3.29L6 12.71 10.7 8 6 3.29 4.58 4.71z"></path></symbol><symbol id="icon-sm-arrow-up" viewBox="0 0 16 16"><path d="M11.29 10.42L12.71 9 8 4.3 3.29 9l1.42 1.42L8 7.12z"></path></symbol><symbol id="icon-sm-arrowdouble-left" viewBox="0 0 16 16"><path d="M13.41 11.3L12 12.7 7.29 8l4.7-4.7 1.42 1.4-3.3 3.3 3.3 3.3zm-5 0L7 12.7 2.29 8l4.7-4.7 1.42 1.4L5.11 8l3.3 3.3z"></path></symbol><symbol id="icon-sm-arrowdouble-right" viewBox="0 0 16 16"><path d="M7.59 11.3L10.88 8l-3.3-3.3L9 3.3 13.7 8 9 12.7l-1.41-1.4zM5.88 8l-3.3-3.3L4 3.3 8.7 8 4 12.7l-1.41-1.4L5.88 8z"></path></symbol><symbol id="icon-sm-backspace" viewBox="0 0 16 16"><path d="M14 7H5.83l3.59-3.59L8 2 2 8l6 6 1.41-1.41L5.83 9H14z"></path></symbol><symbol id="icon-sm-block" viewBox="0 0 16 16"><path d="M5.24 12.17a5 5 0 0 0 6.93-6.93l-6.93 6.93zm-1.41-1.41l6.93-6.93a5 5 0 0 0-6.93 6.93zM8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14z"></path></symbol><symbol id="icon-sm-calendar" viewBox="0 0 16 16"><path d="M11 9H8v3h3V9zm-1-6H6V1H4v2a2 2 0 0 0-1.99 2L2 13a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2V1h-2v2zm2 10H4V7h8v6z"></path></symbol><symbol id="icon-sm-check-done" viewBox="0 0 16 16"><path d="M5.47 6.75L4 8.19l3.26 3.16 4.95-4.91L10.75 5 7.26 8.52z"></path></symbol><symbol id="icon-sm-cogs" viewBox="0 0 16 16"><path d="M6.67 1.5h2.66c.17 0 .3.13.32.3l.17 1.68c.43.17.83.4 1.18.68l1.55-.7a.33.33 0 0 1 .41.14l1.33 2.3c.09.15.05.33-.09.43l-1.37.99a4.92 4.92 0 0 1 0 1.36l1.37 1c.14.09.18.27.1.42l-1.34 2.3a.33.33 0 0 1-.41.14l-1.55-.7a4.6 4.6 0 0 1-1.18.68l-.17 1.69a.33.33 0 0 1-.32.29H6.67a.33.33 0 0 1-.33-.3l-.16-1.68c-.43-.17-.83-.4-1.19-.68l-1.54.7a.33.33 0 0 1-.42-.14L1.7 10.1a.32.32 0 0 1 .1-.43l1.37-.99a4.92 4.92 0 0 1 0-1.36l-1.37-1a.32.32 0 0 1-.1-.42l1.33-2.3c.09-.15.27-.2.42-.14l1.54.7c.36-.28.76-.51 1.19-.68l.16-1.69a.33.33 0 0 1 .33-.29zM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path></symbol><symbol id="icon-sm-check" viewBox="0 0 16 16"><path d="M3.35 6.92L1.88 8.36l4.13 4.01L13.7 4.8l-1.46-1.44-6.23 6.18z"></path></symbol><symbol id="icon-sm-collapse" viewBox="0 0 16 16"><path d="M8 11.42l-3.3 3.3-1.4-1.42L8 8.59l4.7 4.7-1.4 1.42-3.3-3.3zm0-6.83l3.3-3.3 1.4 1.42L8 7.4 3.3 2.7l1.4-1.42L8 4.6z"></path></symbol><symbol id="icon-sm-copy" viewBox="0 0 16 16"><path d="M3 0a2 2 0 0 0-2 2v10h2V2h7V0H3zm10.67 4H6.33C5.6 4 5 4.6 5 5.33v9.34C5 15.4 5.6 16 6.33 16h7.34c.73 0 1.33-.6 1.33-1.33V5.33C15 4.6 14.4 4 13.67 4zM13 14H7V6h6v8z"></path></symbol><symbol id="icon-sm-cross" viewBox="0 0 16 16"><path d="M7.95 6.54l4.24-4.25 1.42 1.42-4.25 4.24 4.25 4.24-1.42 1.42-4.24-4.25-4.24 4.25-1.42-1.42 4.25-4.24-4.25-4.24 1.42-1.42 4.24 4.25z"></path></symbol><symbol id="icon-sm-dashboard" viewBox="0 0 16 16"><path d="M14 2H9v3h5V2zm0 5H9v7h5V7zM7 2H2v7h5V2zm0 9H2v3h5v-3z"></path></symbol><symbol id="icon-sm-deal" viewBox="0 0 16 16"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.26-8.71c-1.5-.39-1.97-.78-1.97-1.4 0-.7.66-1.2 1.77-1.2 1.16 0 1.6.56 1.64 1.37h1.44a2.6 2.6 0 0 0-2.1-2.47V2.17H7.08v1.4c-1.27.27-2.3 1.09-2.3 2.34 0 1.5 1.26 2.24 3.08 2.67 1.64.4 1.97.96 1.97 1.57 0 .44-.32 1.16-1.77 1.16-1.35 0-1.88-.6-1.95-1.37H4.67c.08 1.42 1.15 2.22 2.4 2.49v1.4h1.97v-1.39c1.28-.24 2.3-.97 2.3-2.3 0-1.84-1.6-2.47-3.08-2.85z"></path></symbol><symbol id="icon-sm-credit-card" viewBox="0 0 16 16"><path d="M14.4 2c.89 0 1.6.67 1.6 1.5v9c0 .83-.71 1.5-1.6 1.5H1.6C.71 14 0 13.33 0 12.5v-9C0 2.67.72 2 1.6 2h12.8zM14 12V8H2v4h12zm0-7V4H2v1h12z"></path></symbol><symbol id="icon-sm-drag-handle" viewBox="0 0 16 16"><path d="M14 5H2v2h12V5zM2 11h12V9H2v2z"></path></symbol><symbol id="icon-sm-ellipsis" viewBox="0 0 16 16"><path d="M3.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM8 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></symbol><symbol id="icon-sm-email-mark-as-unread" viewBox="0 0 16 16"><path d="M13 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zM2.5 3h6.63a4 4 0 0 0-.1 1.5H2.5l5.5 4 2.23-1.62a4 4 0 0 0 1.05.73L8 10 2.5 6v6.5h11V7.97a3.97 3.97 0 0 0 1.5-.5v5.03c0 .83-.67 1.5-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-8C1 3.67 1.67 3 2.5 3z"></path></symbol><symbol id="icon-sm-email-outline" viewBox="0 0 16 16"><path d="M2.5 3h11c.83 0 1.5.67 1.5 1.5v8c0 .83-.67 1.5-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-8C1 3.67 1.67 3 2.5 3zm0 9.5h11V6L8 10 2.5 6v6.5zm11-8h-11l5.5 4 5.5-4z"></path></symbol><symbol id="icon-sm-email" viewBox="0 0 16 16"><path d="M2.5 2C1.67 2 1 2.67 1 3.5v9c0 .83.67 1.5 1.5 1.5h11c.83 0 1.5-.67 1.5-1.5v-9c0-.83-.67-1.5-1.5-1.5h-11zM2 3l6 4 6-4v2L8 9 2 5V3z"></path></symbol><symbol id="icon-sm-expand" viewBox="0 0 16 16"><path d="M8 12.58l3.3-3.29 1.4 1.41L8 15.41l-4.7-4.7 1.4-1.42 3.3 3.3zm0-9.16l-3.3 3.3L3.3 5.3 8 .59l4.7 4.7-1.4 1.42L8 3.41z"></path></symbol><symbol id="icon-sm-email-template" viewBox="0 0 16 16"><path d="M3 16v-2H1v-2h2v-2h2v2h2v2H5v2H3zm6-2v-2h3V6h2v6a2 2 0 0 1-2 2H9zm1-9V1l4 4h-4zM3 8V3c0-1.1.9-2 2-2h4v2H5v5H3z"></path></symbol><symbol id="icon-sm-file" viewBox="0 0 16 16"><path d="M4.5 4a4.5 4.5 0 0 0 0 9H12v-1.5H4.5a3 3 0 1 1 0-6h8.25a1.75 1.75 0 1 1 0 3.5H6a.5.5 0 0 1 0-1h6V6.5H6a2 2 0 1 0 0 4h6.75a3.25 3.25 0 0 0 0-6.5H4.5z"></path></symbol><symbol id="icon-sm-filter" viewBox="0 0 16 16"><path d="M6 12h4v-2H6v2zM2 4v2h12V4H2zm2 5h8V7H4v2z"></path></symbol><symbol id="icon-sm-finish-flag" viewBox="0 0 16 16"><path d="M7.38 3H3v6h3.62l1 2H13V5H7V3h.38zM1 1h7.62l1 2H15v10H6.38l-1-2H3v4H1V1zm4 2v2H3V3h2zm2 2v2H5V5h2zm4 0v2H9V5h2zm2 2v2h-2V7h2zm-2 2v2H9V9h2zM9 7v2H7V7h2zM5 7v2H3V7h2z"></path></symbol><symbol id="icon-sm-forecast" viewBox="0 0 16 16"><path d="M3.05 3.05a7 7 0 0 1 9.9 0l1.66-1.65v4.4h-4.4l1.64-1.65A5.44 5.44 0 1 0 13.44 8H15A7 7 0 1 1 3.05 3.05zm5.13 4.47c1.04.26 2.15.68 2.15 1.9 0 .9-.7 1.38-1.6 1.54v.93H7.35v-.94c-.88-.18-1.63-.7-1.68-1.65h1c.06.5.43.9 1.37.9 1.01 0 1.24-.47 1.24-.77 0-.4-.23-.78-1.38-1.04C6.62 8.1 5.75 7.6 5.75 6.6c0-.83.71-1.37 1.6-1.56v-.93h1.38v.95c.96.22 1.44.9 1.47 1.64h-1c-.03-.54-.33-.9-1.15-.9-.77 0-1.24.32-1.24.8 0 .4.34.67 1.38.92z"></path></symbol><symbol id="icon-sm-forward" viewBox="0 0 16 16"><path d="M8 6V3l5 5-5 5v-3H2V6z"></path></symbol><symbol id="icon-sm-fullscreen" viewBox="0 0 16 16"><path d="M2 7V3h5v2H4v2H2zm0 2h2v2h3v2H2V9zm12-2h-2V5H9V3h5v4zm0 2v4H9v-2h3V9h2z"></path></symbol><symbol id="icon-sm-help" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm1 13H7v-2h2v2zm.63-4.98c-.54.51-.57.93-.57 1.98H7v-.35c0-.77.46-1.47 1-1.98l1.06-.93c.27-.25.44-.56.44-.94 0-.77-.68-1.15-1.5-1.15-.83 0-1.54.56-1.54 1.33h-1.5C4.96 4.44 6.26 3 7.91 3 9.57 3 11 4.25 11 5.8c0 .62-.27 1.18-.7 1.58l-.67.64z"></path></symbol><symbol id="icon-sm-gift" viewBox="0 0 16 16"><path d="M13 5a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2l.01-6c0-1.11.88-2 1.99-2-.67-.5-1-1-1-1.5C2 2 3.34 1 5 1c1.05 0 1.96.54 2.5 1.34l.5.68.5-.67A3 3 0 0 1 11 1c1.66 0 3 1 3 2.5 0 .23-.33.73-1 1.5zm-2.7-1.7c-.27.25-.67.81-1.22 1.68 1.5.08 2.37-.01 2.63-.27a1 1 0 0 0 0-1.42 1 1 0 0 0-1.42 0zm-4.6 0a1 1 0 0 0-1.4 0 1 1 0 0 0 0 1.4c.3.34 1.21.43 2.71.28a19.68 19.68 0 0 0-1.3-1.69zM13 13v-2H9v2h4zm-6 0v-2H3v2h4zm0-4V7H3v2h4zm6 0V7H9v2h4z"></path></symbol><symbol id="icon-sm-goal" viewBox="0 0 16 16"><path d="M8.96 3.86L7.53 5.29a2.75 2.75 0 1 0 3.18 3.18l1.43-1.43A4.26 4.26 0 0 1 8 12.25a4.25 4.25 0 1 1 .96-8.4zm1.29-2.23L9.03 2.85A5.28 5.28 0 0 0 2.75 8a5.25 5.25 0 1 0 10.4-1.03l1.22-1.22a6.74 6.74 0 0 1-6.37 9 6.75 6.75 0 1 1 2.25-13.12zM8.39 6.55L11 3.94V3l3-3v2h2l-3 3h-.94L9.45 7.61a1.5 1.5 0 1 1-1.06-1.06z"></path></symbol><symbol id="icon-sm-help-outline" viewBox="0 0 16 16"><path d="M7.1 12.9h1.8v-1.8H7.1v1.8zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm0 14a6 6 0 1 1 .02-12.02A6 6 0 0 1 8 14zM4.8 6.4h1.6c0-.88.72-1.6 1.6-1.6.88 0 1.6.72 1.6 1.6 0 1.6-2.57 1.4-2.57 4h1.92c0-1.8 2.25-2 2.25-4a3.2 3.2 0 1 0-6.4 0z"></path></symbol><symbol id="icon-sm-inbox" viewBox="0 0 16 16"><path d="M1 3c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3zm2 0v7h3a2 2 0 1 0 4 0h3V3H3z"></path></symbol><symbol id="icon-sm-info-outline" viewBox="0 0 16 16"><path d="M7 12h2V7H7v5zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm0 14a6 6 0 1 1 .02-12.02A6 6 0 0 1 8 14zM7 6h2V4H7v2z"></path></symbol><symbol id="icon-sm-info" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm1 12H7V8h2v4zm0-6H7V4h2v2z"></path></symbol><symbol id="icon-sm-lead" viewBox="0 0 16 17"><path d="M13.66 8H15v2h-1.34A5.76 5.76 0 0 1 9 14.66V16H7v-1.34A5.76 5.76 0 0 1 2.34 10H1V8h1.34A5.76 5.76 0 0 1 7 3.34V2h2v1.34A5.76 5.76 0 0 1 13.66 8zM8 13.25a4.25 4.25 0 1 0 0-8.5 4.25 4.25 0 0 0 0 8.5zm0-1.75a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"></path></symbol><symbol id="icon-sm-invoice" viewBox="0 0 16 16"><path d="M2 1l2 1 2-1 2 1 2-1 2 1 2-1v14l-2-1-2 1-2-1-2 1-2-1-2 1V1zm2 4h8V4H4v1zm0 3h8V7H4v1zm3 3h5v-1H7v1z"></path></symbol><symbol id="icon-sm-link-off" viewBox="0 0 16 16"><path d="M2 2l5.25 5.25H11v1.5H8.75L14 14l-1 1-3.25-3.25H9V11L6.75 8.75H5v-1.5h.25L3.91 5.91a2.25 2.25 0 0 0 .84 4.34H7v1.5H4.75A3.75 3.75 0 0 1 2.8 4.8L1 3l1-1zm10.09 8.09a2.25 2.25 0 0 0-.84-4.34H9v-1.5h2.25a3.75 3.75 0 0 1 1.95 6.95l-1.1-1.1zM7 5l-.75-.75H7V5z"></path></symbol><symbol id="icon-sm-linegraph" viewBox="0 0 16 16"><path d="M12.47 5.47L11 4h4v4l-1.47-1.47L9 11.06l-3-3-4.47 4.47-1.06-1.06L6 5.94l3 3 3.47-3.47z"></path></symbol><symbol id="icon-sm-list" viewBox="0 0 16 16"><path d="M2 2h12v2H2V2zm0 3h12v2H2V5zm0 3h12v2H2V8zm0 3h12v2H2v-2z"></path></symbol><symbol id="icon-sm-link" viewBox="0 0 16 16"><path fill-opacity="0" d="M0 0h16v16H0z"></path><path d="M4.75 4.25H7v1.5H4.75a2.25 2.25 0 0 0 0 4.5H7v1.5H4.75a3.75 3.75 0 1 1 0-7.5zm6.5 6a2.25 2.25 0 0 0 0-4.5H9v-1.5h2.25a3.75 3.75 0 1 1 0 7.5H9v-1.5h2.25zm-.25-3v1.5H5v-1.5h6z"></path></symbol><symbol id="icon-sm-logout" viewBox="0 0 16 16"><path d="M14 13V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v2h2V3h8v10H4v-2H2v2c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2zm-4-5L7 5v2H2v2h5v2l3-3z"></path></symbol><symbol id="icon-sm-microphone" viewBox="0 0 16 16"><path d="M8 1a2 2 0 0 1 2 2v4a2 2 0 1 1-4 0V3c0-1.1.9-2 2-2zm.75 10.7V15h-1.5v-3.3a4.75 4.75 0 0 1-4-4.7h1.5a3.25 3.25 0 1 0 6.5 0h1.5a4.75 4.75 0 0 1-4 4.7z"></path></symbol><symbol id="icon-sm-minus" viewBox="0 0 16 16"><path d="M3 9V7h10v2z"></path></symbol><symbol id="icon-sm-locked" viewBox="0 0 16 16"><path d="M3.46 6C2.66 6 2 6.67 2 7.49v7.02c0 .82.66 1.49 1.46 1.49h9.08c.8 0 1.46-.67 1.46-1.49V7.49C14 6.67 13.34 6 12.54 6H3.46zm3.04 5c0-.82.67-1.5 1.5-1.5.82 0 1.5.68 1.5 1.5s-.68 1.5-1.5 1.5A1.5 1.5 0 0 1 6.5 11zM4 4.04A3.9 3.9 0 0 1 8 0c2.1 0 4 1.48 4 4v2.02H9.99V4.04C9.99 2.7 9.26 2 8 2s-1.99.71-1.99 2.04v1.98H4V4.04z"></path></symbol><symbol id="icon-sm-move" viewBox="0 0 16 16"><path d="M7 13V9H3v2L0 8l3-3v2h4V3H5l3-3 3 3H9v4h4V5l3 3-3 3V9H9v4h2l-3 3-3-3z"></path></symbol><symbol id="icon-sm-note" viewBox="0 0 16 16"><path d="M2 1h12a1 1 0 0 1 1 1v10l-3 3H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm9 10v3l3-3h-3zM4 6h8V4H4v2zm0 3h5V7H4v2z"></path></symbol><symbol id="icon-sm-organization" viewBox="0 0 16 16"><path d="M9 2v3h6v9H2V2h7zm0 4v7h5V6H9zM7 7H6v2h1V7zM4 7v2h1V7H4zm3 3H6v2h1v-2zm-3 0v2h1v-2H4zm3-6H6v2h1V4zM4 4v2h1V4H4zm7 6v2h-1v-2h1zm-1-3h1v2h-1V7zm3 3v2h-1v-2h1zm-1-3h1v2h-1V7z"></path></symbol><symbol id="icon-sm-pencil" viewBox="0 0 16 16"><path d="M2 14h2.5l7.13-7.1-2.5-2.5L2 11.5V14zm11.8-9.3a.66.66 0 0 0 0-.95L12.26 2.2a.66.66 0 0 0-.94 0L10.1 3.42l2.5 2.5 1.2-1.22z"></path></symbol><symbol id="icon-sm-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1.5c-2 0-6 1-6 3V14h12v-1.5c0-2-4-3-6-3z"></path></symbol><symbol id="icon-sm-move-to-inbox" viewBox="0 0 16 16"><path d="M1 3c0-1.1.9-2 2-2h3v2H3v7h3a2 2 0 1 0 4 0h3V3h-3V1h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3zm6-2h2v4h2L8 8 5 5h2V1z"></path></symbol><symbol id="icon-sm-plus" viewBox="0 0 17 16"><path d="M10 9v4H8V9H4V7h4V3h2v4h4v2z"></path></symbol><symbol id="icon-sm-product" viewBox="0 0 16 16"><path d="M2 13.39v-6.4h12v6.4a.6.6 0 0 1-.6.61H2.6a.6.6 0 0 1-.6-.61zM8 10v2h4v-2H8zm6-4H9V2h2.1c.19 0 .37.1.48.25L14 6zM7 6H2l2.43-3.75A.6.6 0 0 1 4.92 2H7v4z"></path></symbol><symbol id="icon-sm-redirect" viewBox="0 0 16 16"><path d="M11.59 3H9V1h6v6h-2V4.41l-6.3 6.3-1.4-1.42L11.58 3zM7 1v2H3.5a.5.5 0 0 0-.5.5v9c0 .28.22.5.5.5h9a.5.5 0 0 0 .5-.5V9h2v3.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5v-9A2.5 2.5 0 0 1 3.5 1H7z"></path></symbol><symbol id="icon-sm-pipeline" viewBox="0 0 16 16"><path d="M6 2v12h3V2H6zm7 0h-3v6h3V2zM5 2v9H2V2h3z"></path></symbol><symbol id="icon-sm-refresh" viewBox="0 0 16 16"><path d="M12.39 9a4.5 4.5 0 1 1-1.2-4.18L9.5 6.5H14V2l-1.76 1.76A6 6 0 1 0 13.92 9h-1.53z"></path></symbol><symbol id="icon-sm-relationship" viewBox="0 0 16 16"><path d="M6.99 13.92l1.01.93 1.02-.92.02-.03C12.64 10.64 15 8.5 15 5.85 15 3.69 13.3 2 11.15 2A4.2 4.2 0 0 0 8 3.46 4.2 4.2 0 0 0 4.85 2 3.81 3.81 0 0 0 1 5.85c0 .66.15 1.28.42 1.9H3.6l1.78-2.67a.75.75 0 0 1 1.32.14L8.17 8.9l1.2-1.82a.8.8 0 0 1 .63-.33h1a.75.75 0 0 1 0 1.5h-.6l-1.78 2.67a.75.75 0 0 1-1.32-.14L5.83 7.1l-1.2 1.82a.75.75 0 0 1-.63.33H2.33c1.04 1.4 2.66 2.86 4.65 4.66v.01z"></path></symbol><symbol id="icon-sm-reply" viewBox="0 0 16 16"><path d="M6.98 3L2 8l4.98 5v-3c3.33 0 5.35.67 7.02 3-.67-3.33-2.35-6.27-7.02-6.93V3z"></path></symbol><symbol id="icon-sm-report" viewBox="0 0 16 16"><path fill-opacity="0" d="M0 0h16v16H0z"></path><path d="M13 1a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h10zm0 12V3H3v10h10zM4 6h2v6H4V6zm3-2h2v8H7V4zm3 4h2v4h-2V8z"></path></symbol><symbol id="icon-sm-resize" viewBox="0 0 16 16"><path d="M10 11a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm0-4a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm-4 4a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path></symbol><symbol id="icon-sm-result" viewBox="0 0 16 16"><path fill-opacity="0" d="M0 0h16v16H0z"></path><path d="M7.96 9.5l3.54-6.13L12.87 3l.36 1.37-3.52 6.1a2 2 0 1 1-1.75-.96zM4 11.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm3-3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm5 3a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm1.18-3.04l1.1-1.91A7.97 7.97 0 0 1 16 11.5h-2c0-1.1-.3-2.15-.82-3.04zM7.96 5.5a6 6 0 0 0-5.96 6H0a8 8 0 0 1 9.07-7.93L7.96 5.5z"></path></symbol><symbol id="icon-sm-search" viewBox="0 0 16 16"><path d="M10.58 9.26L14 12.68 12.68 14l-3.42-3.42a4.68 4.68 0 1 1 1.32-1.32zm-3.9.22a2.8 2.8 0 1 0 0-5.6 2.8 2.8 0 0 0 0 5.6z"></path></symbol><symbol id="icon-sm-replyall" viewBox="0 0 16 16"><path d="M5 5V3L0 8l5 5v-2L2 8l3-3zm4-2L4 8l5 5v-3c3.33 0 5.33.67 7 3-.67-3.33-2.33-6.33-7-7V3z"></path></symbol><symbol id="icon-sm-star-outline" viewBox="0 0 16 16"><path d="M8 10.76l3.05 1.84-.8-3.47 2.7-2.34-3.56-.3L8 3.2 6.6 6.5l-3.54.3 2.7 2.34-.81 3.47L8 10.76zM3.06 15.2l1.3-5.62L0 5.79l5.75-.49L8 0l2.25 5.3 5.75.5-4.37 3.78 1.31 5.62L8 12.22 3.06 15.2z"></path></symbol><symbol id="icon-sm-thumb-down" viewBox="0 0 16 16"><path d="M14 10.5h-2.25V3H14v7.5zm-3.75 0l-3 4.5-.75-.75c-.35-.35-.85-1.38-.75-1.88V10.5H3.5C2 10.5 2 9.75 2 9l.5-4.8c.15-.7.76-1.2 1.48-1.2h6.27v7.5z"></path></symbol><symbol id="icon-sm-share" viewBox="0 0 16 16"><path d="M9.87 10.35a2 2 0 1 1-.83 1.25L6.13 9.65a2 2 0 1 1 0-3.3L9.04 4.4A2 2 0 0 1 11 2a2 2 0 1 1-1.13 3.65L6.96 7.6a2 2 0 0 1 0 .8l2.91 1.95z"></path></symbol><symbol id="icon-sm-star" viewBox="0 0 16 16"><path d="M8 12.22l4.94 2.98-1.31-5.62L16 5.79l-5.75-.49L8 0 5.75 5.3 0 5.79l4.37 3.79-1.31 5.62z"></path></symbol><symbol id="icon-sm-thumb-up" viewBox="0 0 16 16"><path d="M2 5.5h2.25V13H2V5.5zm3.75 0l3-4.5.75.75c.35.35.85 1.38.75 1.88V5.5h2.25C14 5.5 14 6.25 14 7l-.5 4.8a1.5 1.5 0 0 1-1.48 1.2H5.75V5.5z"></path></symbol><symbol id="icon-sm-timeline" viewBox="0 0 16 16"><path d="M9.94 6l1.92-1.66a5.48 5.48 0 0 0-7.69-.07 5.35 5.35 0 0 0 0 7.61 5.46 5.46 0 0 0 7.69 0 5.07 5.07 0 0 0 1.58-3.8H15c0 1.54-.68 3.54-2.05 4.89a7.04 7.04 0 0 1-9.9 0 6.87 6.87 0 0 1-.01-9.78 7 7 0 0 1 9.84 0L15 1v5H9.94zM8.4 8.38L11.12 10l-.56.94-3.33-1.97v-3.9H8.4v3.31z"></path></symbol><symbol id="icon-sm-triangle-left" viewBox="0 0 16 16"><path d="M10 3L5 8l5 5z"></path></symbol><symbol id="icon-sm-trash" viewBox="0 0 16 16"><path d="M14 3H2V1h3.5l1-1h3l1 1 3.5.01V3zm-1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4h10z"></path></symbol><symbol id="icon-sm-triangle-down" viewBox="0 0 16 16"><path d="M3 6l5 5 5-5z"></path></symbol><symbol id="icon-sm-triangle-up" viewBox="0 0 16 16"><path d="M3 10l5-5 5 5z"></path></symbol><symbol id="icon-sm-unlocked" viewBox="0 0 16 16"><path d="M6 12.5c.83 0 1.5-.68 1.5-1.5S6.83 9.5 6 9.5c-.82 0-1.5.68-1.5 1.5s.68 1.5 1.5 1.5zM1.46 6C.66 6 0 6.67 0 7.49v7.02C0 15.33.65 16 1.46 16h9.08c.8 0 1.46-.67 1.46-1.49V7.5c0-.83-.65-1.5-1.46-1.5H1.46zM2 14V8h8v6H2zM8 4c0-2.5 1.9-4 4-4s4 1.48 4 4v2h-2V4c-.01-1.29-.74-2-2-2s-1.99.68-2 2l.01 2H8V4z"></path></symbol><symbol id="icon-sm-triangle-right" viewBox="0 0 16 16"><path d="M6 13l5-5-5-5z"></path></symbol><symbol id="icon-sm-warning-outline" viewBox="0 0 16 16"><path d="M9.07 2.8l5.68 10.12c.6 1.06.1 1.91-1.1 1.91H2.35c-1.2 0-1.7-.85-1.1-1.9L6.93 2.78c.6-1.05 1.55-1.06 2.14 0zM3 13h10L7.99 4 3 13zm4-6.5h2V10H7V6.5zM7 11h2v1.5H7V11z"></path></symbol><symbol id="icon-sm-user" viewBox="0 0 16 16"><path d="M15 8A7 7 0 1 1 1 8a7 7 0 0 1 14 0zm-5-2a2 2 0 1 0-4 0 2 2 0 0 0 4 0zM8 9c-1.33 0-4 .67-4 2a5 5 0 0 0 8 0c0-1.33-2.66-2-4-2z"></path></symbol><symbol id="icon-sm-upgrade" viewBox="0 0 16 16"><path d="M6 4l1.3 2.7L10 8 7.3 9.3 6 12 4.7 9.3 2 8l2.7-1.3L6 4zm4 6.67l.65 1.35 1.35.65-1.35.64-.65 1.36-.65-1.36L8 12.67l1.35-.65.65-1.35zm1.33-9.34l.87 1.8L14 4l-1.8.86-.87 1.8-.86-1.8L8.67 4l1.8-.86.86-1.8z"></path></symbol><symbol id="icon-sm-warning" viewBox="0 0 16 16"><path d="M9.07 2.8l5.68 10.12c.6 1.06.1 1.91-1.1 1.91H2.35c-1.2 0-1.7-.85-1.1-1.9L6.93 2.78c.6-1.05 1.55-1.06 2.14 0zM7 6v4h2V6H7zm0 5v2h2v-2H7z"></path></symbol><symbol id="icon-sm-weighted" viewBox="0 0 16 16"><path d="M4.21 6.08l1.34 3.25h.54v1.34S5.45 12 3.55 12C1.64 12 1 10.67 1 10.67V9.33h.55l1.2-2.94a.5.5 0 0 1 .05-.95l4.72-1.32V2.5c0-.28.22-.5.48-.5a.5.5 0 0 1 .48.5v1.35l4.47-1.26c.25-.07.52.1.58.36a.5.5 0 0 1-.34.61l-.07.02 1.33 3.25H15v1.34s-.64 1.33-2.55 1.33c-1.9 0-2.54-1.33-2.54-1.33V6.83h.54L11.61 4l-3.13.88V13h2.22a.5.5 0 0 1 .48.5c0 .28-.21.5-.48.5H5.3a.5.5 0 0 1-.48-.5c0-.28.21-.5.48-.5h2.22V5.15l-3.3.93zm-.57.16l-.22.06-1.24 3.03h2.73L3.64 6.24zm8.91-2.5l-.22.06-1.24 3.03h2.73l-1.27-3.09z"></path></symbol><symbol id="icon-star" viewBox="0 0 24 24"><path d="M12 16.74l5.56 3.36-1.47-6.33L21 9.52l-6.47-.55L12 3 9.47 8.97 3 9.52l4.91 4.25-1.47 6.33z"></path></symbol><symbol id="icon-text" viewBox="0 0 24 24"><path d="M5 17v2h14v-2H5zm4.5-4.2h5l.9 2.2h2.1L12.75 4h-1.5L6.5 15h2.1l.9-2.2zM12 5.98L13.87 11h-3.74L12 5.98z"></path></symbol><symbol id="icon-sort" viewBox="0 0 24 24"><path d="M7 10l5-5 5 5H7zm10 4l-5 5-5-5h10z"></path></symbol><symbol id="icon-thread" viewBox="0 0 24 24"><path d="M3 12c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8zm2 0v8h14v-8H5zm2 4h6v2H7v-2zm9-3h2v3h-2v-3zM5 6h14v2H5V6zm2-4h10v2H7V2z"></path></symbol><symbol id="icon-thumb-down" viewBox="0 0 24 24"><path d="M22 15h-4V3h4v12zm-6 0l-4.96 8L9 21.5c-.93-.8-.44-3.5-.44-3.5l.5-3H5.09c-3.97 0-2.98-4-2.98-4 .33-1.33.83-3.17 1.49-5.5C4.1 4 5.09 3 6.57 3H16v12z"></path></symbol><symbol id="icon-thumb-up" viewBox="0 0 24 24"><path d="M2 9h4v12H2V9zm6 0l4.96-8L15 2.5c.93.8.44 3.5.44 3.5l-.5 3h3.97c3.97 0 2.98 4 2.98 4-.33 1.33-.83 3.17-1.49 5.5-.5 1.5-1.49 2.5-2.97 2.5H8V9z"></path></symbol><symbol id="icon-timerange" viewBox="0 0 24 24"><path d="M16.24 7.76A5.97 5.97 0 0 0 12 6v6l-4.24 4.24a5.99 5.99 0 1 0 8.48-8.48zM12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"></path></symbol><symbol id="icon-star-outline" viewBox="0 0 24 24"><path d="M12 15l3.3 1.98-.88-3.75 2.91-2.52-3.83-.32L12 6.84l-1.5 3.55-3.83.32 2.91 2.52-.87 3.75L12 14.99zm-5.56 5.1l1.47-6.33L3 9.52l6.47-.55L12 3l2.53 5.97 6.47.55-4.91 4.25 1.47 6.33L12 16.74 6.44 20.1z"></path></symbol><symbol id="icon-trash" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></symbol><symbol id="icon-triangle-down" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"></path></symbol><symbol id="icon-timeline" viewBox="0 0 24 24"><path d="M21 10.12h-6.78l2.74-2.82a7.04 7.04 0 0 0-9.88-.1 6.88 6.88 0 0 0 0 9.79 7.02 7.02 0 0 0 9.88 0A6.51 6.51 0 0 0 19 12.1h2c0 1.98-.88 4.55-2.64 6.29a9.05 9.05 0 0 1-12.72 0 8.84 8.84 0 0 1-.02-12.58 8.99 8.99 0 0 1 12.65 0L21 3v7.12zM12.5 8v4.25l3.5 2.08-.72 1.21L11 13V8h1.5z"></path></symbol><symbol id="icon-triangle-left" viewBox="0 0 24 24"><path d="M14 7l-5 5 5 5z"></path></symbol><symbol id="icon-underline" viewBox="0 0 24 24"><path d="M12 19a6 6 0 0 0 6-6V5h-2.5v8a3.5 3.5 0 0 1-7 0V5H6v8a6 6 0 0 0 6 6zm-7 1v2h14v-2H5z"></path></symbol><symbol id="icon-unlocked" viewBox="0 0 24 24"><path d="M10 17a2 2 0 0 0 2-2 2 2 0 0 0-2-2 2 2 0 0 0-2 2c0 1.1.9 2 2 2zM4 8a2 2 0 0 0-2 2v10c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2H4zm12 12H4V10h12v10zM13 6a5 5 0 0 1 10 0h-2a3 3 0 0 0-6 0v2h-2V6zm8 0h2v2h-2V6z"></path></symbol><symbol id="icon-triangle-right" viewBox="0 0 24 24"><path d="M10 17l5-5-5-5z"></path></symbol><symbol id="icon-upgrade" viewBox="0 0 24 24"><path d="M9 6l1.94 4.06L15 12l-4.06 1.94L9 18l-1.94-4.06L3 12l4.06-1.94L9 6zm6 10l.97 2.03L18 19l-2.03.97L15 22l-.97-2.03L12 19l2.03-.97L15 16zm2-14l1.3 2.7L21 6l-2.7 1.3L17 10l-1.3-2.7L13 6l2.7-1.3L17 2z"></path></symbol><symbol id="icon-user" viewBox="0 0 24 24"><path d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-10a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-6 5v.3a7.98 7.98 0 0 0 12 0V17c0-2-4-3-6-3s-6 1-6 3z"></path></symbol><symbol id="icon-volume-on" viewBox="0 0 24 24"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3A4.5 4.5 0 0 0 14 7.97v8.05A4.47 4.47 0 0 0 16.5 12zM14 3.23v2.06a7 7 0 0 1 0 13.42v2.06a9 9 0 0 0 0-17.54z"></path></symbol><symbol id="icon-triangle-up" viewBox="0 0 24 24"><path d="M7 14l5-5 5 5z"></path></symbol><symbol id="icon-upload" viewBox="0 0 24 24"><path d="M19.35 10.04A4.98 4.98 0 0 1 19 20H6a6 6 0 0 1-.65-11.96 7.5 7.5 0 0 1 14 2zM14 13h3l-5-5-5 5h3v4h4v-4z"></path></symbol><symbol id="icon-volume-off" viewBox="0 0 24 24"><path d="M16.5 12A4.5 4.5 0 0 0 14 7.97v2.21l2.45 2.45c.03-.2.05-.41.05-.63zm2.5 0c0 .94-.2 1.82-.54 2.64l1.51 1.51A9 9 0 0 0 14 3.23v2.06A7 7 0 0 1 19 12zM4.27 3L3 4.27 7.73 9H3v6h4l5 5v-6.73l4.25 4.25c-.67.52-1.42.93-2.25 1.18v2.06a8.99 8.99 0 0 0 3.69-1.81L19.73 21 21 19.73l-9-9L4.27 3zM12 4L9.91 6.09 12 8.18V4z"></path></symbol><symbol id="icon-warning-outline" viewBox="0 0 24 24"><path d="M13.48 4.57l7.83 13.82c.81 1.44.12 2.61-1.53 2.61H4.22c-1.66 0-2.34-1.16-1.52-2.6l7.82-13.83c.82-1.44 2.14-1.45 2.96 0zM4.65 19h14.73L12 6 4.65 19zM11 10h2v5h-2v-5zm0 6h2v2h-2v-2z"></path></symbol><symbol id="icon-warning" viewBox="0 0 24 24"><path d="M13.48 4.57l7.83 13.82c.81 1.44.12 2.61-1.53 2.61H4.22c-1.66 0-2.34-1.16-1.52-2.6l7.82-13.83c.82-1.44 2.14-1.45 2.96 0zM11 10v5h2v-5h-2zm0 6v2h2v-2h-2z"></path></symbol></svg>
		<svg xmlns="http://www.w3.org/2000/svg" class="cui-svg"><symbol id="icon-ac-addressbook" viewBox="0 0 24 24"><path d="M3 5v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2zm12 4a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-9 8c0-2 4-3.1 6-3.1s6 1.1 6 3.1v1H6v-1z"></path></symbol><symbol id="icon-ac-bell" viewBox="0 0 24 24"><path d="M15 16.27c0 1.05.96 1.82 2 1.82V19H7v-.91c1.04 0 2-.77 2-1.82V13a3 3 0 1 1 6 0v3.27zM6.1 13l-1.97-.32a7.96 7.96 0 0 1 4.7-6.05l.8 1.83A6.05 6.05 0 0 0 6.1 13zm11.73 0a6.05 6.05 0 0 0-3.52-4.54l.8-1.83a7.96 7.96 0 0 1 4.7 6.05l-1.98.32zM24 14h-2c0-4.45-3-8.41-7.27-9.62l.54-1.93A12.05 12.05 0 0 1 24 14zM2 14H0C0 8.65 3.59 3.9 8.73 2.45l.54 1.93A10.03 10.03 0 0 0 2 14zm10 8a2 2 0 0 1-2-2h4a2 2 0 0 1-2 2z"></path></symbol><symbol id="icon-ac-brush" viewBox="0 0 24 24"><path d="M7 14a3 3 0 0 0-3 3c0 1.31-1.16 2-2 2 .92 1.22 2.49 2 4 2a4 4 0 0 0 4-4 3 3 0 0 0-3-3zm13.71-9.37l-1.34-1.34a1 1 0 0 0-1.41 0L9 12.25 11.75 15l8.96-8.96a1 1 0 0 0 0-1.41z"></path></symbol><symbol id="icon-ac-calendar" viewBox="0 0 24 24"><path d="M20 10h-6V8h6v2zm-6-6a1 1 0 0 0-.7.3L12 5.58l-1.3-1.3A1 1 0 0 0 10 4H3a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h6.59l1.7 1.7a1 1 0 0 0 1.42 0l1.7-1.7H21a1 1 0 0 0 1-1V5a1 1 0 0 0-1-1h-7z"></path></symbol><symbol id="icon-ac-bubble" viewBox="0 0 24 24"><path d="M9 8v7H7l-3 3v-3H3a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h15a1 1 0 0 1 1 1v4h-9a1 1 0 0 0-1 1zm12 1a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1h-1v3l-3-3h-5a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1h9z"></path></symbol><symbol id="icon-ac-bulb" viewBox="0 0 24 24"><path d="M18 8c0 4-3 5-3 9H9c0-4-3-5-3-9s2.41-6 6-6 6 2 6 6zM9 20.75c0 .27.18.5.44.6l2.35.62a.68.68 0 0 0 .42 0l2.35-.63a.63.63 0 0 0 .44-.59V18H9v2.75z"></path></symbol><symbol id="icon-ac-call" viewBox="0 0 24 24"><path d="M6.38 3c1.12.56 2.8 3.38 3.37 4.5 0 .56-1.69 2.25-1.69 2.81.56 1.69 3.94 5.06 5.63 5.63.56 0 2.25-1.69 2.81-1.69a22.9 22.9 0 0 1 4.5 3.38c0 1.12-2.25 3.37-3.38 3.37C12 19.87 4.13 12 3 6.37 3 5.25 5.25 3 6.38 3"></path></symbol><symbol id="icon-ac-camera" viewBox="0 0 24 24"><path d="M9 3h6l1.83 2H20a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7c0-1.1.9-2 2-2h3.17L9 3zm3 15a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0-1.8a3.2 3.2 0 1 1 0-6.4 3.2 3.2 0 0 1 0 6.4z"></path></symbol><symbol id="icon-ac-cart" viewBox="0 0 24 24"><path d="M7 18a2 2 0 1 0 .01 4A2 2 0 0 0 7 18zM1 2v2h2l3.6 7.59-1.35 2.45A2 2 0 0 0 7 17h12v-2H7.42a.25.25 0 0 1-.25-.25l.03-.12.9-1.63h7.45a2 2 0 0 0 1.75-1.03l3.58-6.49A1 1 0 0 0 20 4H5.21l-.94-2H1zm16 16a2 2 0 1 0 .01 4 2 2 0 0 0-.01-4z"></path></symbol><symbol id="icon-ac-car" viewBox="0 0 24 24"><path d="M18.92 5.01A1.5 1.5 0 0 0 17.5 4h-11a1.5 1.5 0 0 0-1.42 1.01L3 11v8a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1h12v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-8l-2.08-5.99zM6.5 15a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm11 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zM5 10l1.5-4.5h11L19 10H5z"></path></symbol><symbol id="icon-ac-checkbox" viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></symbol><symbol id="icon-ac-clip" viewBox="0 0 24 24"><path d="M19 3h-4.18A3.01 3.01 0 0 0 12 1c-1.3 0-2.4.84-2.82 2H5a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-7 0a1 1 0 0 1 1 1 1 1 0 0 1-1 1 1 1 0 0 1-1-1 1 1 0 0 1 1-1zm7 18H5V5h2v3h10V5h2v16z"></path></symbol><symbol id="icon-ac-deadline" viewBox="0 0 24 24"><path d="M4 22V2h2v20H4zM21.36 7.07a1 1 0 0 1 0 1.86l-13 5a1.01 1.01 0 0 1-.93-.1A1 1 0 0 1 7 13V3a1 1 0 0 1 1.36-.93l13 5z"></path></symbol><symbol id="icon-ac-document" viewBox="0 0 24 24"><path d="M3 5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5zm4 2v2h10V7H7zm0 4v2h10v-2H7zm0 4v2h6v-2H7z"></path></symbol><symbol id="icon-ac-downarrow" viewBox="0 0 24 24"><path d="M20.54 5.23l-1.39-1.68A1.45 1.45 0 0 0 18 3H6c-.47 0-.88.21-1.16.55L3.46 5.23C3.17 5.57 3 6.02 3 6.5V19c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6.5c0-.48-.17-.93-.46-1.27zM12 17.5L6.5 12H10v-2h4v2h3.5L12 17.5zM5.12 5l.81-1h12l.94 1H5.12z"></path></symbol><symbol id="icon-ac-email" viewBox="0 0 24 24"><path d="M16.83 6.85L7.7 14.9c-.43.31-.69.91-.69 1.42v4.1c0 .6.32.76.8.36l3.3-3.46 2.88 2.71c.23.21.5.15.6-.13l6.37-16.54c.12-.29-.04-.43-.34-.32L3.27 9.3c-.3.11-.36.37-.13.58l2.18 2.05c.22.2.63.27.91.12L16.7 6.66c.56-.29.62-.2.14.2z"></path></symbol><symbol id="icon-ac-key" viewBox="0 0 24 24"><path d="M9.86 16.59c-.6.58-1.6.58-2.2 0a1.42 1.42 0 0 1 0-2.09 1.6 1.6 0 0 1 2.2 0c.61.58.61 1.51 0 2.09zm4.05-3.14l2.2-2.09-1.47-1.39 1.47-1.4 1.48 1.4 1.47-1.4-1.47-1.39 1.47-1.4 1.47 1.4L22 5.78 19.06 3l-8.1 7.67-.73-.7a2.16 2.16 0 0 0-2.94 0L3.6 13.45a1.9 1.9 0 0 0 0 2.8l4.41 4.17c.82.77 2.13.77 2.94 0l3.68-3.48a1.9 1.9 0 0 0 0-2.79l-.73-.7z"></path></symbol><symbol id="icon-ac-finish" viewBox="0 0 24 24"><path d="M21 3a1 1 0 0 1 1 1v4a1 1 0 0 1-.38.78l-4.92 3.94a6 6 0 0 1-3.7 2.19V16h2a1 1 0 0 1 1 1v2H8v-2a1 1 0 0 1 1-1h2v-1.1a6 6 0 0 1-3.7-2.18L2.38 8.78A1 1 0 0 1 2 8V4a1 1 0 0 1 1-1h3.28A2 2 0 0 1 8 2h8a2 2 0 0 1 1.72 1H21zm-4 19H7v-2h10v2zm3-14.48V5h-2v4.12l2-1.6zm-16 0l2 1.6V5H4v2.52z"></path></symbol><symbol id="icon-ac-linegraph" viewBox="0 0 24 24"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"></path></symbol><symbol id="icon-ac-loop" viewBox="0 0 24 24"><path d="M19 8l-4 4h3a6 6 0 0 1-8.8 5.3l-1.46 1.46A8 8 0 0 0 20 12h3l-4-4zM6 12a6 6 0 0 1 8.8-5.3l1.46-1.46A8 8 0 0 0 4 12H1l4 4 4-4H6z"></path></symbol><symbol id="icon-ac-lunch" viewBox="0 0 24 24"><path d="M8.1 13.34l2.83-2.83L3.91 3.5a4 4 0 0 0 0 5.66l4.19 4.18zm6.78-1.81c1.53.71 3.68.21 5.27-1.38 1.91-1.91 2.28-4.65.81-6.12-1.46-1.46-4.2-1.1-6.12.81-1.59 1.59-2.09 3.74-1.38 5.27L3.7 19.87l1.41 1.41L12 14.41l6.88 6.88 1.41-1.41L13.41 13l1.47-1.47z"></path></symbol><symbol id="icon-ac-meeting" viewBox="0 0 24 24"><path d="M16 11a2.99 2.99 0 0 0 2.99-3A3 3 0 1 0 16 11zm-8 0a2.99 2.99 0 0 0 2.99-3A3 3 0 1 0 8 11zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"></path></symbol><symbol id="icon-ac-padlock" viewBox="0 0 24 24"><path d="M18 8h-1V6A5 5 0 0 0 7 6v2H6a2 2 0 0 0-2 2v10c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2zm-6 9a2 2 0 0 1-2-2c0-1.1.9-2 2-2a2 2 0 0 1 2 2 2 2 0 0 1-2 2zm3.1-9H8.9V6a3.1 3.1 0 0 1 6.2 0v2z"></path></symbol><symbol id="icon-ac-plane" viewBox="0 0 24 24"><path d="M21 16v-2l-8-5V3.5a1.5 1.5 0 1 0-3 0V9l-8 5v2l8-2.5V19l-2 1.5V22l3.5-1 3.5 1v-1.5L13 19v-5.5l8 2.5z"></path></symbol><symbol id="icon-ac-picture" viewBox="0 0 24 24"><path d="M21 19V5a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2zM8.5 13.5l2.5 3.01L14.5 12l4.5 6H5l3.5-4.5z"></path></symbol><symbol id="icon-ac-presentation" viewBox="0 0 24 24"><path d="M10 8v8l5-4-5-4zm9-5H5a2 2 0 0 0-2 2v14c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 16H5V5h14v14z"></path></symbol><symbol id="icon-ac-pricetag" viewBox="0 0 24 24"><path d="M21.41 11.58l-9-9A1.99 1.99 0 0 0 11 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 .59 1.42l9 9a1.99 1.99 0 0 0 2.82-.01l7-7c.37-.36.59-.86.59-1.41 0-.55-.23-1.06-.59-1.42zM5.5 7a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></symbol><symbol id="icon-ac-search" viewBox="0 0 24 24"><path d="M16.15 14.7h-.77l-.27-.27a6.32 6.32 0 1 0-.68.68l.26.27v.77L19.55 21 21 19.55l-4.85-4.86zm-5.9-.2a4.24 4.24 0 1 1-.01-8.49 4.24 4.24 0 0 1 .01 8.5z"></path></symbol><symbol id="icon-ac-scissors" viewBox="0 0 24 24"><path d="M9.64 7.64L22 20v1h-3l-7-7-2.36 2.36a4 4 0 1 1-2-2L10 12 7.64 9.64a4 4 0 1 1 2-2zM12 12.5a.5.5 0 0 0 .5-.5.5.5 0 0 0-.5-.5.5.5 0 0 0-.5.5c0 .28.22.5.5.5zM6 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 12a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM19 3h3v1l-7 7-2-2 6-6z"></path></symbol><symbol id="icon-ac-shuffle" viewBox="0 0 24 24"><path d="M10.59 9.17L5.41 4 4 5.41l5.17 5.17 1.42-1.41zM14.5 4l2.04 2.04L4 18.59 5.41 20 17.96 7.46 20 9.5V4h-5.5zm.33 9.41l-1.41 1.41 3.13 3.13L14.5 20H20v-5.5l-2.04 2.04-3.13-3.13z"></path></symbol><symbol id="icon-ac-signpost" viewBox="0 0 24 24"><path d="M11 21.38c0 .34.22.62.5.62h1c.28 0 .5-.28.5-.63V17h-2v4.38zM7.7 11a.53.53 0 0 0-.32.1L4.3 13.37A.8.8 0 0 0 4 14c0 .26.11.5.3.64l3.08 2.25c.1.07.2.11.31.11h10.7c.33 0 .61-.34.61-.75v-4.5c0-.41-.28-.75-.62-.75H7.7zM11 4V2.62c0-.34.22-.62.5-.62h1c.28 0 .5.28.5.63V4h3.3c.12 0 .23.04.32.1l3.08 2.26c.19.13.3.38.3.64a.8.8 0 0 1-.3.64L16.62 9.9c-.1.07-.2.11-.31.11H5.6C5.29 10 5 9.66 5 9.25v-4.5c0-.41.28-.75.62-.75H11z"></path></symbol><symbol id="icon-ac-smartphone" viewBox="0 0 24 24"><path d="M15.5 1h-8A2.5 2.5 0 0 0 5 3.5v17A2.5 2.5 0 0 0 7.5 23h8a2.5 2.5 0 0 0 2.5-2.5v-17A2.5 2.5 0 0 0 15.5 1zm-4 21a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm4.5-4H7V4h9v14z"></path></symbol><symbol id="icon-ac-suitcase" viewBox="0 0 24 24"><path d="M14 16v-2h7v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-6h7v2h4zm7-10a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-7v-1h-4v1H3a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1h5V3a1 1 0 0 1 1-1h6a1 1 0 0 1 1 1v3h5zm-7 0V4h-4v2h4z"></path></symbol><symbol id="icon-ac-sound" viewBox="0 0 24 24"><path d="M3 9v6h4l5 5V4L7 9H3zm13.5 3A4.5 4.5 0 0 0 14 7.97v8.05A4.47 4.47 0 0 0 16.5 12zM14 3.23v2.06a7 7 0 0 1 0 13.42v2.06a9 9 0 0 0 0-17.54z"></path></symbol><symbol id="icon-ac-task" viewBox="0 0 24 24"><path d="M11.99 2a10 10 0 1 1 0 20.01A10 10 0 0 1 12 2zM12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm.5-13v5.25l4.5 2.67-.75 1.23L11 13V7h1.5z"></path></symbol><symbol id="icon-ac-tool" viewBox="0 0 24 24"><path d="M22.7 19l-9.1-9.1c.9-2.3.4-5-1.5-6.9-2-2-5-2.4-7.4-1.3L9 6 6 9 1.6 4.7C.4 7.1.9 10.1 2.9 12.1c1.9 1.9 4.6 2.4 6.9 1.5l9.1 9.1c.4.4 1 .4 1.4 0l2.3-2.3c.5-.4.5-1.1.1-1.4z"></path></symbol><symbol id="icon-ac-truck" viewBox="0 0 24 24"><path d="M20 8h-3V4H3a2 2 0 0 0-2 2v11h2a3 3 0 1 0 6 0h6a3 3 0 1 0 6 0h2v-5l-3-4zM6 18.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm13.5-9l1.96 2.5H17V9.5h2.5zm-1.5 9a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></symbol><symbol id="icon-ac-uparrow" viewBox="0 0 24 24"><path d="M20.5 5.2l-1.4-1.7c-.2-.3-.6-.5-1.1-.5H6c-.5 0-.9.2-1.2.5L3.5 5.2c-.3.4-.5.8-.5 1.3V19c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V6.5c0-.5-.2-.9-.5-1.3zm-4 7.8H14v3h-4v-3H7.5L12 8.5l4.5 4.5zM5.1 5l.8-1h12l.9 1H5.1z"></path></symbol><symbol id="icon-ac-wifi" viewBox="0 0 24 24"><path d="M1 9l2 2a12.73 12.73 0 0 1 18 0l2-2A15.57 15.57 0 0 0 1 9zm8 8l3 3 3-3a4.24 4.24 0 0 0-6 0zm-4-4l2 2a7.07 7.07 0 0 1 10 0l2-2a9.91 9.91 0 0 0-14 0z"></path></symbol><symbol id="icon-ac-world" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm-1 17.93a7.99 7.99 0 0 1-6.79-9.72L9 15v1c0 1.1.9 2 2 2v1.93zm6.9-2.54c-.26-.81-1-1.39-1.9-1.39h-1v-3a1 1 0 0 0-1-1H8v-2h2a1 1 0 0 0 1-1V7h2a2 2 0 0 0 2-2v-.41a8 8 0 0 1 2.9 12.8z"></path></symbol><symbol id="icon-address" viewBox="0 0 24 24"><path d="M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"></path></symbol><symbol id="icon-apps" viewBox="0 0 24 24"><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"></path></symbol><symbol id="icon-archive" viewBox="0 0 24 24"><path d="M4 4h16a1 1 0 0 1 1 1v3H3V5a1 1 0 0 1 1-1zm0 5h16v11a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9zm5 4v2h6v-2H9z"></path></symbol><symbol id="icon-arrow-down" viewBox="0 0 24 24"><path d="M16.59 8.59L12 13.17 7.41 8.59 6 10l6 6 6-6z"></path></symbol><symbol id="icon-arrow-left" viewBox="0 0 24 24"><path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"></path></symbol><symbol id="icon-arrow-right" viewBox="0 0 24 24"><path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"></path></symbol><symbol id="icon-arrowdouble-left" viewBox="0 0 24 24"><path d="M12.41 7.41L7.83 12l4.58 4.59L11 18l-6-6 6-6 1.41 1.41zm6 0L13.83 12l4.58 4.59L17 18l-6-6 6-6 1.41 1.41z"></path></symbol><symbol id="icon-arrow-up" viewBox="0 0 24 24"><path d="M12 8l-6 6 1.41 1.41L12 10.83l4.59 4.58L18 14z"></path></symbol><symbol id="icon-arrowdouble-right" viewBox="0 0 24 24"><path d="M6.41 6l6 6-6 6L5 16.59 9.58 12 5 7.41 6.41 6zm6 0l6 6-6 6L11 16.59 15.58 12 11 7.41 12.41 6z"></path></symbol><symbol id="icon-attach" viewBox="0 0 24 24"><path d="M2 12.5A5.5 5.5 0 0 1 7.5 7H18a4 4 0 1 1 0 8H9.5a2.5 2.5 0 0 1 0-5H17v2H9.41c-.55 0-.55 1 0 1H18a2 2 0 0 0 2-2 2 2 0 0 0-2-2H7.5a3.5 3.5 0 0 0 0 7H17v2H7.5A5.5 5.5 0 0 1 2 12.5z"></path></symbol><symbol id="icon-autocomplete" viewBox="0 0 24 24"><path d="M15 21h2v-2h-2v2zm4-12h2V7h-2v2zM3 5v14c0 1.1.9 2 2 2h4v-2H5V5h4V3H5a2 2 0 0 0-2 2zm16-2v2h2a2 2 0 0 0-2-2zm-8 20h2V1h-2v22zm8-6h2v-2h-2v2zM15 5h2V3h-2v2zm4 8h2v-2h-2v2zm0 8a2 2 0 0 0 2-2h-2v2z"></path></symbol><symbol id="icon-attention-outline" viewBox="0 0 24 24"><path d="M13.48 4.57l7.83 13.82c.81 1.44.12 2.61-1.53 2.61H4.22c-1.66 0-2.34-1.16-1.52-2.6l7.82-13.83c.82-1.44 2.14-1.45 2.96 0zM4.65 19h14.73L12 6 4.65 19zM11 10h2v5h-2v-5zm0 6h2v2h-2v-2z"></path></symbol><symbol id="icon-backspace" viewBox="0 0 24 24"><path d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"></path></symbol><symbol id="icon-bell" viewBox="0 0 24 24"><path d="M11.5 22a2 2 0 0 0 2-2h-4c0 1.1.9 2 2 2zm6.5-6v-5.5a6.5 6.5 0 0 0-5-6.32V3.5a1.5 1.5 0 1 0-3 0v.68a6.5 6.5 0 0 0-5 6.32V16l-2 2v1h17v-1l-2-2z"></path></symbol><symbol id="icon-bold" viewBox="0 0 24 24"><path d="M15.6 11.79c.97-.67 1.65-1.77 1.65-2.79 0-2.26-1.75-4-4-4H7v14h7.04c2.09 0 3.71-1.7 3.71-3.79 0-1.52-.86-2.82-2.15-3.42zM10 7.5h3a1.5 1.5 0 1 1 0 3h-3v-3zm3.5 9H10v-3h3.5a1.5 1.5 0 1 1 0 3z"></path></symbol><symbol id="icon-block" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zM4 12a8 8 0 0 1 12.9-6.31L5.69 16.9A7.9 7.9 0 0 1 4 12zm8 8a7.9 7.9 0 0 1-4.9-1.69L18.31 7.1A8 8 0 0 1 12 20z"></path></symbol><symbol id="icon-calendar" viewBox="0 0 24 24"><path d="M17 13h-5v5h5v-5zM16 2v2H8V2H6v2H5a2 2 0 0 0-1.99 2L3 20a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1V2h-2zm3 18H5V9h14v11z"></path></symbol><symbol id="icon-call" viewBox="0 0 24 24"><path d="M6.38 3c1.12.56 2.8 3.38 3.37 4.5 0 .56-1.69 2.25-1.69 2.81.56 1.69 3.94 5.06 5.63 5.63.56 0 2.25-1.69 2.81-1.69a22.9 22.9 0 0 1 4.5 3.38c0 1.12-2.25 3.37-3.38 3.37C12 19.87 4.13 12 3 6.37 3 5.25 5.25 3 6.38 3"></path></symbol><symbol id="icon-check" viewBox="0 0 24 24"><path d="M9 16.17L4.83 12l-1.42 1.41L9 19 21 7l-1.41-1.41z"></path></symbol><symbol id="icon-checkbox" viewBox="0 0 24 24"><path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-9 14l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"></path></symbol><symbol id="icon-clearformat" viewBox="0 0 24 24"><path d="M4.27 4L3 5.27l6.97 6.97L7.5 18h3l1.57-3.66L17.73 20 19 18.73 4.55 4.27 4.27 4zM7 4v.18L9.82 7h2.4l-.72 1.68 2.1 2.1L15.21 7H21V4H7z"></path></symbol><symbol id="icon-cogs" viewBox="0 0 24 24"><path d="M9.95 2h4.1c.26 0 .47.2.5.45l.26 2.6a7.5 7.5 0 0 1 1.81 1.04L19 5.02a.5.5 0 0 1 .64.2l2.05 3.55a.5.5 0 0 1-.15.66l-2.11 1.52a7.56 7.56 0 0 1 0 2.1l2.11 1.52c.21.15.27.43.15.66l-2.05 3.54a.5.5 0 0 1-.64.2l-2.38-1.06c-.55.43-1.16.78-1.81 1.05l-.26 2.59a.5.5 0 0 1-.5.45h-4.1a.5.5 0 0 1-.5-.45l-.25-2.6a7.5 7.5 0 0 1-1.82-1.04L5 18.98a.5.5 0 0 1-.64-.2l-2.04-3.55a.5.5 0 0 1 .14-.66l2.11-1.52a7.56 7.56 0 0 1 0-2.1L2.46 9.43a.5.5 0 0 1-.14-.66l2.04-3.54a.5.5 0 0 1 .64-.2l2.38 1.06A7.5 7.5 0 0 1 9.2 5.04l.26-2.59a.5.5 0 0 1 .5-.45zM12 15.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"></path></symbol><symbol id="icon-collapse" viewBox="0 0 24 24"><path d="M12 7.59l5.3-5.3 1.4 1.42-6.7 6.7-6.7-6.7 1.4-1.42L12 7.6zm-6.7 12.7l6.7-6.7 6.7 6.7-1.4 1.42-5.3-5.3-5.3 5.3-1.4-1.42z"></path></symbol><symbol id="icon-cross" viewBox="0 0 24 24"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></symbol><symbol id="icon-daterange" viewBox="0 0 24 24"><path d="M17 10H7v2h10v-2zm2-7h-1V1h-2v2H8V1H6v2H5a2 2 0 0 0-1.99 2L3 19a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm0 16H5V8h14v11zm-5-5H7v2h7v-2z"></path></symbol><symbol id="icon-deadline" viewBox="0 0 24 24"><path d="M14.4 6L14 4H5v17h2v-7h5.6l.4 2h7V6z"></path></symbol><symbol id="icon-deal" viewBox="0 0 24 24"><path d="M12 22a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm.3-10.86c-1.78-.45-2.35-.93-2.35-1.67 0-.85.8-1.44 2.12-1.44 1.4 0 1.92.66 1.97 1.64h1.73a3.1 3.1 0 0 0-2.52-2.97V5h-2.36v1.68c-1.52.33-2.75 1.3-2.75 2.8 0 1.8 1.5 2.7 3.7 3.22 1.96.47 2.35 1.15 2.35 1.87 0 .54-.38 1.4-2.12 1.4-1.62 0-2.25-.72-2.34-1.64H8c.1 1.7 1.38 2.66 2.9 2.98V19h2.35v-1.67c1.53-.29 2.75-1.17 2.75-2.76 0-2.21-1.91-2.97-3.7-3.43z"></path></symbol><symbol id="icon-delete" viewBox="0 0 24 24"><path d="M22 3H7c-.69 0-1.23.35-1.59.88L0 12l5.41 8.11c.36.53.9.89 1.59.89h15a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2zm-3 12.59L17.59 17 14 13.41 10.41 17 9 15.59 12.59 12 9 8.41 10.41 7 14 10.59 17.59 7 19 8.41 15.41 12 19 15.59z"></path></symbol><symbol id="icon-download" viewBox="0 0 24 24"><path d="M19.35 10.04A4.98 4.98 0 0 1 19 20H6a6 6 0 0 1-.65-11.96 7.5 7.5 0 0 1 14 2zM17 13h-3V9h-4v4H7l5 5 5-5z"></path></symbol><symbol id="icon-drag-handle" viewBox="0 0 24 24"><path d="M20 9H4v2h16V9zM4 15h16v-2H4v2z"></path></symbol><symbol id="icon-ellipsis" viewBox="0 0 24 24"><path d="M6 10a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm12 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2zm-6 0a2 2 0 0 0-2 2c0 1.1.9 2 2 2a2 2 0 0 0 2-2 2 2 0 0 0-2-2z"></path></symbol><symbol id="icon-email-mark-as-unread" viewBox="0 0 24 24"><path d="M20 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM4 4h11.1a5.02 5.02 0 0 0 0 2H4l8 6 4.53-3.4a5 5 0 0 0 1.4.95L12 14 4 8v10h16v-8c.71 0 1.39-.15 2-.42V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2l.01-12A2 2 0 0 1 4 4z"></path></symbol><symbol id="icon-email-outline" viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-1.99 2L2 18c0 1.1.9 2 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 14H4V8l8 5 8-5v10zm-8-7L4 6h16l-8 5z"></path></symbol><symbol id="icon-email-template" viewBox="0 0 24 24"><path d="M5 23v-3H2v-2h3v-3h2v3h3v2H7v3H5zm12-3V10h2v10h-2zm-5 0v-2h3v2h-3zm-7-7v-3h2v3H5zm9-4V4l5 5h-5zM5 8V4h8v2H7v2H5z"></path></symbol><symbol id="icon-email" viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-1.99 2L2 18c0 1.1.9 2 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path></symbol><symbol id="icon-expand" viewBox="0 0 24 24"><path d="M12 19.59l5.3-5.3 1.4 1.42-6.7 6.7-6.7-6.7 1.4-1.42 5.3 5.3zm0-18l6.7 6.7-1.4 1.42L12 4.4 6.7 9.7 5.3 8.28 12 1.6z"></path></symbol><symbol id="icon-file-document" viewBox="0 0 24 24"><path d="M14 8V3l5 5h-5zm3 10H7v-2h10v2zM7 12h8v2H7v-2zm8.41-10H6a2 2 0 0 0-2 2v16c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V6.59L15.41 2z"></path></symbol><symbol id="icon-file-pdf" viewBox="0 0 24 24"><path d="M16.41 1L21 5.59V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h11.41zM15 7h5l-5-5v5zm4.8 8.5V14h-3.3c-.83 0-1.5.67-1.5 1.5V20h1.5v-2H19v-1.5h-2.5v-1h3.3zM11.5 20a3 3 0 0 0 0-6H10v6h1.5zm-4.75-1.5a2.25 2.25 0 0 0 0-4.5H4.5v6H6v-1.5h.75zm4.75-3a1.5 1.5 0 0 1 0 3v-3zm-4.75 0a.75.75 0 0 1 0 1.5H6v-1.5h.75z"></path></symbol><symbol id="icon-file-picture" viewBox="0 0 24 24"><path d="M15 7V2l5 5h-5zM6 20l3-4 2 2 4-5 3 7H6zM8.5 9a2.5 2.5 0 1 1 0 5 2.5 2.5 0 0 1 0-5zm7.91-8H5.01a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5.6L16.4 1z"></path></symbol><symbol id="icon-file-presentation" viewBox="0 0 24 24"><path d="M15 7V2l5 5h-5zM8 18v-8l8 4-8 4zm8.41-17H5.01a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5.6L16.4 1z"></path></symbol><symbol id="icon-file-sound" viewBox="0 0 24 24"><path d="M15 7V2l5 5h-5zm.63 5.26L13 11.4v6.11a2.5 2.5 0 1 1-2-2.45V8.61l5.27 1.76-.64 1.9zM16.41 1H5.01a2 2 0 0 0-2 2v18a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5.6L16.4 1z"></path></symbol><symbol id="icon-file-spreadsheet" viewBox="0 0 24 24"><path d="M15 7V2l5 5h-5zm3 12H6v-2h2V8h2v9h1v-4h2v4h1v-6h2v6h2v2zM16.41 1H5a2 2 0 0 0-2 2v18c0 1.1.9 2 2 2h14a2 2 0 0 0 2-2V5.59L16.41 1z"></path></symbol><symbol id="icon-file-video" viewBox="0 0 24 24"><path d="M16.41 1l4.6 4.59V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h11.4zm-1.4 6h5l-5-5v5zm2 11v-6l-4 2.25V12H7v6h6v-2.25L17 18z"></path></symbol><symbol id="icon-file-zip" viewBox="0 0 24 24"><path d="M16.41 1L21 5.59V21a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V3c0-1.1.9-2 2-2h11.41zM15 7h5l-5-5v5zm2.25 11.5a2.25 2.25 0 0 0 0-4.5H15v6h1.5v-1.5h.75zm-3.25-3V14h-3v1.5h.75v3H11V20h3v-1.5h-.75v-3H14zM9.5 20v-1.5H7.15l2.22-3.33A.75.75 0 0 0 8.75 14H5v1.5h2.35l-2.22 3.33A.75.75 0 0 0 5.75 20H9.5zm7.75-4.5a.75.75 0 0 1 0 1.5h-.75v-1.5h.75z"></path></symbol><symbol id="icon-file" viewBox="0 0 24 24"><path d="M16.5 6v11.5a4 4 0 1 1-8 0V5a2.5 2.5 0 0 1 5 0v10.5a1 1 0 0 1-1 1 1 1 0 0 1-1-1V6H10v9.5a2.5 2.5 0 0 0 5 0V5a4 4 0 1 0-8 0v12.5a5.5 5.5 0 1 0 11 0V6h-1.5z"></path></symbol><symbol id="icon-filter" viewBox="0 0 24 24"><path d="M10 18h4v-2h-4v2zM3 6v2h18V6H3zm3 7h12v-2H6v2z"></path></symbol><symbol id="icon-flow" viewBox="0 0 24 24"><path d="M13 3a9 9 0 0 0-9 9H1l3.89 3.89.07.14L9 12H6a7 7 0 1 1 2.06 4.94l-1.42 1.42A9 9 0 1 0 13 3zm-1 5v5l4.28 2.54.72-1.21-3.5-2.08V8H12z"></path></symbol><symbol id="icon-folder" viewBox="0 0 24 24"><path d="M10 4H4a2 2 0 0 0-1.99 2L2 18c0 1.1.9 2 2 2h16a2 2 0 0 0 2-2V8a2 2 0 0 0-2-2h-8l-2-2z"></path></symbol><symbol id="icon-fullscreen" viewBox="0 0 24 24"><path d="M4 10V5h6v2H6v3H4zm0 4h2v3h4v2H4v-5zm16-4h-2V7h-4V5h6v5zm0 4v5h-6v-2h4v-3h2z"></path></symbol><symbol id="icon-forward" viewBox="0 0 24 24"><path d="M12 9V4l8 8-8 8v-5H4V9z"></path></symbol><symbol id="icon-forecast" viewBox="0 0 24 24"><path d="M4.93 4.93a10 10 0 0 1 14.15 0l2.37-2.36v6.28h-6.3L17.5 6.5a7.78 7.78 0 1 0 2.27 5.5H22A10 10 0 1 1 4.93 4.93zm7.33 6.4c1.48.36 3.07.95 3.07 2.7 0 1.27-1.01 1.97-2.29 2.2v1.33h-1.96v-1.34c-1.26-.26-2.33-1.02-2.41-2.37h1.44c.07.73.6 1.3 1.95 1.3 1.45 0 1.77-.68 1.77-1.1 0-.58-.33-1.12-1.97-1.5-1.82-.4-3.08-1.12-3.08-2.54 0-1.2 1.03-1.97 2.3-2.23V6.44h1.96V7.8c1.37.31 2.06 1.29 2.1 2.35H13.7c-.04-.77-.48-1.3-1.64-1.3-1.1 0-1.77.47-1.77 1.14 0 .6.48.97 1.97 1.33z"></path></symbol><symbol id="icon-gift" viewBox="0 0 24 24"><path d="M9.08 8H13v5h7V8h-5.08L17 10.83 15.38 12 13 8.76h-2V8H9.08zM20 6a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2l.01-12c0-1.11.88-2 1.99-2h2.18a3 3 0 0 1 5.32-2.66l.5.68.5-.67A3 3 0 0 1 17.82 6H20zm-5.7-1.7c-.27.25-.67.81-1.22 1.68 1.5.08 2.37-.01 2.63-.27a1 1 0 0 0 0-1.42 1 1 0 0 0-1.42 0zm-4.6 0a1 1 0 0 0-1.4 0 1 1 0 0 0 0 1.4c.3.34 1.21.43 2.71.28a19.68 19.68 0 0 0-1.3-1.69zM20 20v-5h-7v5h7zm-9 0v-5H4v5h7zM9.08 8H4v5h7V8.76L9 12l-2-1.17L9.08 8z"></path></symbol><symbol id="icon-goal" viewBox="0 0 24 24"><path d="M16 9.23l-2.96 2.97a1.76 1.76 0 1 1-1.24-1.24l2.97-2.97V6.34L19.1 2l.2 2.69 2.69.2-4.34 4.34H16zm-2.52-2.02l-1.41 1.41a4.09 4.09 0 1 0 3.31 3.3l1.4-1.41a5.83 5.83 0 0 1-5.43 7.98 5.84 5.84 0 1 1 2.13-11.28zm1.55-3.16l-1.36 1.36a7.6 7.6 0 1 0 4.94 4.98l1.36-1.36a9.35 9.35 0 1 1-4.94-4.97z"></path></symbol><symbol id="icon-help-outline" viewBox="0 0 24 24"><path d="M11 18h2v-2h-2v2zm1-16a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8.01 8.01 0 0 1 0-16 8.01 8.01 0 0 1 0 16zm0-14a4 4 0 0 0-4 4h2c0-1.1.9-2 2-2a2 2 0 0 1 2 2c0 2-3 1.75-3 5h2c0-2.25 3-2.5 3-5a4 4 0 0 0-4-4z"></path></symbol><symbol id="icon-help" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 17h-2v-2h2v2zm2.07-7.75l-.9.92A3.4 3.4 0 0 0 13 15h-2v-.5c0-1.1.45-2.1 1.17-2.83l1.24-1.26c.37-.36.59-.86.59-1.41a2 2 0 0 0-2-2 2 2 0 0 0-2 2H8a4 4 0 1 1 8 0c0 .88-.36 1.68-.93 2.25z"></path></symbol><symbol id="icon-inbox" viewBox="0 0 24 24"><path d="M3 5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5zm2 0v10h4a3 3 0 1 0 6 0h4V5H5z"></path></symbol><symbol id="icon-info-outline" viewBox="0 0 24 24"><path d="M11 17h2v-6h-2v6zm1-15a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8.01 8.01 0 0 1 0-16 8.01 8.01 0 0 1 0 16zM11 9h2V7h-2v2z"></path></symbol><symbol id="icon-info" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm1 15h-2v-6h2v6zm0-8h-2V7h2v2z"></path></symbol><symbol id="icon-italic" viewBox="0 0 24 24"><path d="M10 5v3h2.21l-3.42 8H6v3h8v-3h-2.21l3.42-8H18V5z"></path></symbol><symbol id="icon-linegraph" viewBox="0 0 24 24"><path d="M16 6l2.29 2.29-4.88 4.88-4-4L2 16.59 3.41 18l6-6 4 4 6.3-6.29L22 12V6z"></path></symbol><symbol id="icon-largetext" viewBox="0 0 24 24"><path d="M9 4v3h5v12h3V7h5V4H9zm-6 8h3v7h3v-7h3V9H3v3z"></path></symbol><symbol id="icon-link-tracking" viewBox="0 0 24 24"><path d="M7.42 4.67a.69.69 0 0 1-.68-.69v-2.3a.69.69 0 1 1 1.37 0v2.3c0 .38-.3.7-.69.7zm-4.54-.81a.69.69 0 0 1 .98-.98L5.48 4.5a.69.69 0 1 1-.98.98L2.88 3.86zm6.5 1.62a.69.69 0 0 1 0-.98l1.61-1.62a.69.69 0 1 1 .98.98l-1.63 1.62a.69.69 0 0 1-.97 0zm-6.5 5.51L4.5 9.37a.69.69 0 1 1 .98.97l-1.62 1.63a.69.69 0 1 1-.98-.98zm-1.2-4.25h2.3a.69.69 0 1 1 0 1.37h-2.3a.69.69 0 1 1 0-1.37zm13.53 8.47L12.61 23 7.43 7.42 23 12.62l-7.79 2.6z"></path></symbol><symbol id="icon-link" viewBox="0 0 24 24"><path d="M3.9 12A3.1 3.1 0 0 1 7 8.9h4V7H7a5 5 0 0 0 0 10h4v-1.9H7A3.1 3.1 0 0 1 3.9 12zM8 13h8v-2H8v2zm9-6h-4v1.9h4a3.1 3.1 0 0 1 0 6.2h-4V17h4a5 5 0 0 0 0-10z"></path></symbol><symbol id="icon-list-bulleted" viewBox="0 0 24 24"><path d="M3.5 12a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0zm0-6a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0zm0 12c0-.82.67-1.5 1.5-1.5s1.5.68 1.5 1.5-.68 1.5-1.5 1.5-1.5-.68-1.5-1.5zM9 19v-2h12v2H9zm0-6v-2h12v2H9zm0-8h12v2H9V5z"></path></symbol><symbol id="icon-list-numbered" viewBox="0 0 24 24"><path d="M3 17h2v.5H4v1h1v.5H3v1h3v-4H3v1zm1-9h1V4H3v1h1v3zm-1 3h1.8L3 13.1v.9h3v-1H4.2L6 10.9V10H3v1zm6-6v2h12V5H9zm0 14h12v-2H9v2zm0-6h12v-2H9v2z"></path></symbol><symbol id="icon-list" viewBox="0 0 24 24"><path d="M4 15h16v-2H4v2zm0 4h16v-2H4v2zm0-8h16V9H4v2zm0-6v2h16V5H4z"></path></symbol><symbol id="icon-locked" viewBox="0 0 24 24"><path d="M17 8V6A5 5 0 0 0 7 6v2H6a2 2 0 0 0-2 2v10c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2h-1zm-5 9a2 2 0 0 1-2-2c0-1.1.9-2 2-2a2 2 0 0 1 2 2 2 2 0 0 1-2 2zm3.1-9H8.9V6a3.1 3.1 0 0 1 6.2 0v2z"></path></symbol><symbol id="icon-logo-p" viewBox="0 0 24 24"><path d="M10.15 4.41c-.06-.53-.41-1.18-1.8-1.18H5v2.91h1.37c.21 0 .29.12.29.32v14.56h3.72v-5.94a5.04 5.04 0 0 0 3.38 1.22c3.49 0 5.76-2.77 5.76-6.73 0-4.02-2.2-6.72-5.64-6.72-2 0-3.16.94-3.73 1.56zm3.05 1.6c1.69 0 2.82 1.45 2.82 3.61 0 2.47-1.44 3.57-2.87 3.57-1.91 0-2.79-1.84-2.79-3.54C10.36 6.96 11.83 6 13.2 6z"></path></symbol><symbol id="icon-logout" viewBox="0 0 24 24"><path d="M20 19V5a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v4h2V5h12v14H6v-4H4v4c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2zm-4-7l-4-4v3H4v2h8v3l4-4z"></path></symbol><symbol id="icon-mail" viewBox="0 0 24 24"><path d="M20 4H4a2 2 0 0 0-1.99 2L2 18c0 1.1.9 2 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path></symbol><symbol id="icon-minus" viewBox="0 0 24 24"><path d="M19 13H5v-2h14z"></path></symbol><symbol id="icon-move-to-inbox" viewBox="0 0 24 24"><path d="M9 3v2H4.99v10H9a3 3 0 0 0 6 0h4V5h-4V3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H4.99A2 2 0 0 1 3 19l.01-14c0-1.1.87-2 1.98-2H9zm5 0v5h2l-4 4-4-4h2V3h4z"></path></symbol><symbol id="icon-monetary" viewBox="0 0 24 24"><path d="M12.48 10.9c-2.27-.59-3-1.2-3-2.15 0-1.09 1.01-1.85 2.7-1.85 1.78 0 2.44.85 2.5 2.1h2.21a3.99 3.99 0 0 0-3.21-3.81V3h-3v2.16c-1.94.42-3.5 1.68-3.5 3.61 0 2.31 1.91 3.46 4.7 4.13 2.5.6 3 1.48 3 2.41 0 .69-.49 1.79-2.7 1.79-2.06 0-2.87-.92-2.98-2.1H7c.12 2.19 1.76 3.42 3.68 3.83V21h3v-2.15c1.95-.37 3.5-1.5 3.5-3.55 0-2.84-2.43-3.81-4.7-4.4z"></path></symbol><symbol id="icon-note" viewBox="0 0 24 24"><path d="M3 5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v11.28L16.26 21H5a2 2 0 0 1-2-2V5zm4 2v2h10V7H7zm0 4v2h6v-2H7zm8 4v5l5-5h-5z"></path></symbol><symbol id="icon-notes" viewBox="0 0 24 24"><path d="M3 5c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v11.28L16.26 21H5a2 2 0 0 1-2-2V5zm4 2v2h10V7H7zm0 4v2h6v-2H7zm8 4v5l5-5h-5z"></path></symbol><symbol id="icon-numerical" viewBox="0 0 24 24"><path d="M10 12h4v2H8v-3a2 2 0 0 1 2-2h2V8H8V6h4a2 2 0 0 1 2 2v1a2 2 0 0 1-2 2h-2v1zm-3 2H5V8H3V6h4v8zm14-2v1c0 .65-.31.88-.8.96-.33.06-.75.04-1.2.04h-4v-2h4v-1h-2V9h2V8h-4V6h4a2 2 0 0 1 2 2v.5c0 .83-.67 1.5-1.5 1.5.83 0 1.5.67 1.5 1.5v.5zM3 16h18v2H3v-2z"></path></symbol><symbol id="icon-open-tracking" viewBox="0 0 24 24"><path d="M23 12.5c-1 3-4.92 7.5-11 7.5S2 15.5 1 12.5C2 9.5 5.92 5 12 5s10 4.5 11 7.5zm-6 0a5 5 0 1 0-10 0 5 5 0 0 0 10 0zm-5 3a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"></path></symbol><symbol id="icon-organization" viewBox="0 0 24 24"><path d="M3 3h10v18H3V3zm12 4l2.5-2h1L21 7v14h-6V7zM5 5v2h2V5H5zm0 4v2h2V9H5zm0 4v2h2v-2H5zm0 4v2h2v-2H5zM9 5v2h2V5H9zm0 4v2h2V9H9zm0 4v2h2v-2H9zm0 4v2h2v-2H9zm8 0v2h2v-2h-2zm0-4v2h2v-2h-2zm0-4v2h2V9h-2z"></path></symbol><symbol id="icon-pencil" viewBox="0 0 24 24"><path d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75L3 17.25zM20.71 7.04a1 1 0 0 0 0-1.41l-2.34-2.34a1 1 0 0 0-1.41 0l-1.83 1.83 3.75 3.75 1.83-1.83z"></path></symbol><symbol id="icon-person" viewBox="0 0 24 24"><path d="M12 12a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9zm0 2c-3 0-9 1.56-9 4.67V21h18v-2.33c0-3.1-6-4.67-9-4.67z"></path></symbol><symbol id="icon-personadd" viewBox="0 0 24 24"><path d="M15 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm-9-2V7H4v3H1v2h3v3h2v-3h3v-2H6zm9 4c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></symbol><symbol id="icon-pipeline" viewBox="0 0 24 24"><path d="M14 4h-4v16h4V4zm6 0h-4v8h4V4zM8 15V4H4v11h4z"></path></symbol><symbol id="icon-play-video" viewBox="0 0 24 24"><path d="M10 16.5l6-4.5-6-4.5v9zM12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8.01 8.01 0 0 1 0-16 8.01 8.01 0 0 1 0 16z"></path></symbol><symbol id="icon-pin" viewBox="0 0 24 24"><path d="M3 21l7.07-5.14-1.93-1.93L3 21zM14.6 3a3.64 3.64 0 0 0-.9 3.32L10.63 9.4a5.34 5.34 0 0 0-1.62-.26c-1.13 0-2.2.39-3 1.19L13.68 18a4.5 4.5 0 0 0 .93-4.62l3.07-3.07c.27.05.55.08.82.08.94 0 1.84-.32 2.5-.99L14.6 3z"></path></symbol><symbol id="icon-plus" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6z"></path></symbol><symbol id="icon-product" viewBox="0 0 24 24"><path d="M2 21V10h20v11a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1zm11-5v3h6v-3h-6zm8.54-8H13V2h4a1 1 0 0 1 .83.45L21.53 8zM11 8H2.46l3.7-5.55A1 1 0 0 1 7 2h4v6z"></path></symbol><symbol id="icon-redirect" viewBox="0 0 24 24"><path d="M19 19H5V5h7V3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z"></path></symbol><symbol id="icon-refresh" viewBox="0 0 24 24"><path d="M17.65 6.35A8 8 0 1 0 19.73 14h-2.08a6 6 0 1 1-1.43-6.22L13 11h7V4l-2.35 2.35z"></path></symbol><symbol id="icon-reply" viewBox="0 0 24 24"><path d="M10 5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11V5z"></path></symbol><symbol id="icon-replyall" viewBox="0 0 24 24"><path d="M7 8V5l-7 7 7 7v-3l-4-4 4-4zm6 1V5l-7 7 7 7v-4.1c5 0 8.5 1.6 11 5.1-1-5-4-10-11-11z"></path></symbol><symbol id="icon-share" viewBox="0 0 24 24"><path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7 0-.24-.04-.47-.09-.7l7.05-4.11A2.99 2.99 0 0 0 21 5a3 3 0 1 0-5.91.7L8.04 9.81A2.99 2.99 0 0 0 3 12a3 3 0 0 0 5.04 2.19l7.12 4.16A2.92 2.92 0 1 0 18 16.08z"></path></symbol><symbol id="icon-search" viewBox="0 0 24 24"><path d="M16.15 14.7h-.77l-.27-.27a6.32 6.32 0 1 0-.68.68l.26.27v.77L19.55 21 21 19.55l-4.85-4.86zm-5.9-.2a4.24 4.24 0 1 1-.01-8.49 4.24 4.24 0 0 1 .01 8.5z"></path></symbol><symbol id="icon-sm-ac-addressbook" viewBox="0 0 16 16"><path d="M2 3.33v9.34C2 13.4 2.6 14 3.33 14h9.34c.73 0 1.33-.6 1.33-1.33V3.33C14 2.6 13.4 2 12.67 2H3.33C2.6 2 2 2.6 2 3.33zM10 6a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm-6 5.33C4 10 6.67 9.27 8 9.27s4 .73 4 2.06V12H4v-.67z"></path></symbol><symbol id="icon-singleoption" viewBox="0 0 24 24"><path d="M12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0-5a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"></path></symbol><symbol id="icon-signature" viewBox="0 0 24 24"><path d="M11.76 7.12a31.2 31.2 0 0 1-1.49 4.3l-.1.24a27.14 27.14 0 0 0-1.52 4.71c-.35 1.85.01 3.2 1.5 3.57 2.2.56 3.43-.93 4.97-4.42l.45-1.04c.17-.4.3-.68.43-.94.3-.62.54-1.03.75-1.25.08-.1.02-.07-.06-.1.25.1.33.68.1 2.1l-.1.5c-.2 1.15-.26 1.49-.26 1.98 0 .95.33 1.69 1.22 1.93l.36.06c1.03.12 1.98-.37 2.88-1.2a7.5 7.5 0 0 0 1-1.11 1 1 0 1 0-1.63-1.16l-.19.24c-.16.19-.34.38-.53.56a2.7 2.7 0 0 1-1.1.68c0-.32.04-.64.22-1.63a40 40 0 0 0 .1-.53c.39-2.34.2-3.7-1.36-4.3-1.4-.52-2.26.4-3.2 2.37-.14.28-.28.59-.46 1l-.45 1.03c-1.13 2.54-1.9 3.49-2.65 3.3-.05-.02-.05-.02-.07-.11-.07-.23-.06-.63.04-1.16.2-1 .59-2.16 1.43-4.35l.1-.25c1-2.58 1.32-3.5 1.57-4.59.41-1.83.15-3.14-1.32-3.47-4.2-.93-8.14 6.32-10.36 14.63a1 1 0 1 0 1.94.52c1.86-6.97 5.43-13.58 7.9-13.21.03.21 0 .59-.11 1.1z"></path></symbol><symbol id="icon-sm-ac-bell" viewBox="0 0 16 16"><path d="M10.36 9.1v1.4c0 .83.76 1.44 1.6 1.44v.73H3.98v-.73c.83 0 1.59-.61 1.59-1.45V9.1a2.39 2.39 0 0 1 4.78 0zM2.82 8.07c.3-1.8 1.46-3.3 3.13-4.02l.53 1.22a4.01 4.01 0 0 0-2.35 3l-1.3-.2zm9 .2a4.01 4.01 0 0 0-2.33-3l.53-1.22a5.28 5.28 0 0 1 3.12 4.01l-1.31.22zm2.85.38a6.66 6.66 0 0 0-4.83-6.38L10.21 1A8 8 0 0 1 16 8.66h-1.33zm-13.34 0H0A7.97 7.97 0 0 1 5.8 1l.36 1.28a6.66 6.66 0 0 0-4.83 6.38zM7.97 15c-.73 0-1.33-.6-1.33-1.33H9.3c0 .74-.6 1.33-1.33 1.33z"></path></symbol><symbol id="icon-sm-ac-brush" viewBox="0 0 16 16"><path d="M2.67 11.33c0 .88-.98 1.16-1.54 1.16A4.06 4.06 0 0 0 4 14c1.47 0 2.67-1.2 2.67-2.67a2 2 0 1 0-4 0zM12.9 2.2a.66.66 0 0 0-.94 0L6 8.17 7.83 10l5.98-5.97a.66.66 0 0 0 0-.94l-.9-.9z"></path></symbol><symbol id="icon-sm-ac-bubble" viewBox="0 0 16 16"><path d="M6 5.65V10h-.99l-2 2v-2H2c-.45 0-.97-.48-.97-1.01V2c0-.56.6-.95.98-.95h10c.36 0 .97.58.97.95v2.98H6.67c-.37 0-.67.3-.67.67zM8 6h6c.37 0 .97.53.97 1.02V11c0 .6-.57 1-.97 1h-1v2l-2.03-2H8c-.37 0-.97-.51-.97-1V7.02C7.03 6.5 7.49 6 8 6z"></path></symbol><symbol id="icon-sm-ac-bulb" viewBox="0 0 16 16"><path d="M12 5.04c0 2.67-2 3.29-2 5.96H6c0-2.67-2.02-3.3-2.02-5.96s1.62-4 4.01-4c2.4 0 4 1.5 4 4zm-6 8.8c0 .17.22.45.4.51l1.46.61a.45.45 0 0 0 .28 0l1.44-.53c.18-.06.42-.42.42-.6V12H6v1.83z"></path></symbol><symbol id="icon-sm-ac-calendar" viewBox="0 0 16 16"><path d="M13 6H9.97V5H13v1zm-2.93-3.97c-.18 0-.7.17-1.09.67L8 3.6l-1-.9c-.31-.44-.8-.67-.97-.67H2c-.06 0-.98.58-.98.97v8.01c0 .37.61.99.98.99h3.64l1.89 1.74c.13.13.3.3.47.3.17 0 .34-.17.47-.3L10.53 12H14c.37 0 .98-.62.98-.99V3c0-.6-.49-.97-.98-.97h-3.93z"></path></symbol><symbol id="icon-sm-ac-call" viewBox="0 0 16 16"><path d="M6.5 5c0 .38-1.13 1.5-1.13 1.88C5.75 8 8 10.25 9.13 10.63c.38 0 1.5-1.13 1.88-1.13.75.38 2.25 1.5 3 2.25 0 .75-1.5 2.25-2.25 2.25C8 13.25 2.75 8 2 4.25 2 3.5 3.5 2 4.25 2 5 2.38 6.13 4.25 6.5 5z"></path></symbol><symbol id="icon-microphone" viewBox="0 0 24 24"><path d="M12 14a2.99 2.99 0 0 0 2.99-3L15 5a3 3 0 1 0-6 0v6a3 3 0 0 0 3 3zm5.3-3c0 3-2.54 5.1-5.3 5.1S6.7 14 6.7 11H5c0 3.41 2.72 6.23 6 6.72V21h2v-3.28c3.28-.48 6-3.3 6-6.72h-1.7z"></path></symbol><symbol id="icon-sm-ac-car" viewBox="0 0 16 16"><path d="M11.63 2H4.29a1 1 0 0 0-.94.67L2 7.33l-.01 5c0 .37.3.67.66.67h.67c.37 0 .67-.3.67-.67L4 12h8v.33c0 .37.3.67.66.67h.67c.36 0 .66-.3.66-.67l.01-5-1.43-4.66a1 1 0 0 0-.94-.67zM4 10a1 1 0 1 1 0-2 1 1 0 0 1 0 2zm8 0a1 1 0 1 1 0-2 1 1 0 0 1 0 2zM4.77 2.98h6.5L12.05 6H3.94l.83-3.03z"></path></symbol><symbol id="icon-sm-ac-cart" viewBox="0 0 16 16"><path d="M5.04 11.76a1.33 1.33 0 1 0 .01 2.66 1.33 1.33 0 0 0 0-2.66zM1.02 3h.99l2.03 1.35 1.17 3.63H5S3.58 9.5 3.58 9.78c0 .73.41 1.23 1.14 1.23h8.29L11 9H6.63c-.1-.02-.22-.2-.22-.2l.6-.82H11c.5 0 .75-.28.98-.7L13.9 4a.67.67 0 0 0-.6-1L5 3.01l-3-2H1L1.02 3zm9.92 8.67a1.33 1.33 0 1 0 .01 2.67 1.33 1.33 0 0 0 0-2.67z"></path></symbol><symbol id="icon-sm-ac-checkbox" viewBox="0 0 16 16"><path d="M12.67 2C13.4 2 14 2.6 14 3.33v9.34c0 .73-.6 1.33-1.33 1.33H3.33C2.6 14 2 13.4 2 12.67V3.33C2 2.6 2.6 2 3.33 2h9.34zm-7.2 4.75L4 8.2l3.26 3.16 4.95-4.91L10.75 5 7.26 8.52 5.47 6.75z"></path></symbol><symbol id="icon-sm-ac-clip" viewBox="0 0 16 16"><path d="M10 2c0-.8-.44-2-2-2S6.01 1.3 6.01 2h-2C2.61 2 2 2.42 2 3.98v10c0 1.27.5 2 2.01 2h8.01c1.58 0 1.98-.49 1.98-2v-10c0-1.39-.46-2-2-2h-2zM8.75 2c0 .42-.33.75-.75.75A.75.75 0 0 1 7.25 2c0-.4.34-.75.75-.75.42 0 .75.34.75.75zM3.5 14.55V3.53H5V5h6V3.53h1.53v11.02H3.5z"></path></symbol><symbol id="icon-sm-ac-camera" viewBox="0 0 16 16"><path d="M6.12 2h3.86l2.06 2.04 1.5-.04c.83.04 1.46.27 1.46 1v8.04c0 .74-.72.96-1.46.96H2.5c-.73 0-1.49-.22-1.49-.96L1 5c.01-.73.72-.96 1.5-.96H4L6.13 2zM4.75 9a3.26 3.26 0 1 0 6.53 0 3.26 3.26 0 0 0-6.53 0zm3.27 2.16a2.14 2.14 0 1 1 0-4.28 2.14 2.14 0 0 1 0 4.28z"></path></symbol><symbol id="icon-sm-ac-deadline" viewBox="0 0 16 16"><path d="M2.08 15.02V1H4v14.02H2.08zM13.62 4.88s.38.34.38.62c0 .28-.15.52-.38.62L5.89 9.46a.55.55 0 0 1-.21.04.55.55 0 0 1-.34-.12.7.7 0 0 1-.26-.55V2.17c0-.22.1-.43.26-.55a.54.54 0 0 1 .55-.08l7.73 3.34z"></path></symbol><symbol id="icon-sm-ac-document" viewBox="0 0 16 16"><path d="M2 3.33C2 2.6 2.6 2 3.33 2h9.34C13.4 2 14 2.6 14 3.33v9.34c0 .73-.6 1.33-1.33 1.33H3.33C2.6 14 2 13.4 2 12.67V3.33zM4 4v1h8V4H4zm0 2v1h8V6H4zm0 2v1h8V8H4zm0 2v1h5v-1H4z"></path></symbol><symbol id="icon-sm-ac-downarrow" viewBox="0 0 16 16"><path d="M13.7 3.49l-.93-1.12A.97.97 0 0 0 12 2H4a1 1 0 0 0-.77.37L2.3 3.49c-.2.21-.3.51-.3.84v8.34C2 13.4 2.6 14 3.33 14h9.34c.73 0 1.33-.6 1.33-1.33V4.33c0-.32-.11-.62-.3-.84zM4.62 8.04h2.4v-1.4h2.03v1.4h2.45L8 11.77 4.63 8.04zM3.99 3h8.06v.98H4V3z"></path></symbol><symbol id="icon-sm-ac-email" viewBox="0 0 16 16"><path d="M11.22 4.57l-5.7 5.38c-.28.2-.45.6-.45.94v2.73c0 .4.21.51.53.24l1.8-2.32 1.93 1.81c.15.14.33.1.4-.09l4.25-11.02c.07-.2-.03-.29-.23-.22L2.18 6.2c-.2.07-.24.25-.09.39l1.45 1.36c.16.14 1.18.1 1.37 0l6.22-3.51c.37-.2.41-.14.09.13z"></path></symbol><symbol id="icon-sm-ac-finish" viewBox="0 0 16 16"><path d="M10.98 13.02h1V15H4.03v-1.98h1v-1.34c0-.37.6-.66.97-.66h1.01v-1c-.99-.16-1.54-.78-2.14-1.54L1.32 5.85a.67.67 0 0 1-.25-.52V2.67c0-.37.3-.67.66-.67H4.2c.23-.4.65-1 1.14-1h5.34c.49 0 .91.6 1.14 1h2.5c.36 0 .66.3.66.67v2.66c0 .2-.09.4-.25.52l-3.59 2.63c-.6.76-1.17 1.38-2.16 1.55v.99H10c.37 0 .98.3.98.66v1.34zm3.05-8.03V3H12v3.03L14.03 5zM2.03 5L4 6.05V2.99H2.03V5z"></path></symbol><symbol id="icon-sm-ac-key" viewBox="0 0 16 16"><path d="M6.7 10.74c-.4.38-1.04.38-1.44 0a.97.97 0 0 1 0-1.4c.4-.38 1.04-.38 1.44 0 .4.39.4 1.01 0 1.4zm2.38-1.78l1.43-1.4-.95-.92.95-.94.96.94.95-.94-.95-.93.95-.93.96.93.95-.93-1.9-1.86L7.16 7.1l-.48-.46a1.38 1.38 0 0 0-1.9 0l-2.4 2.32a1.3 1.3 0 0 0 0 1.86l2.87 2.8c.53.5 1.38.5 1.91 0l2.39-2.33a1.3 1.3 0 0 0 0-1.86l-.48-.47z"></path></symbol><symbol id="icon-sm-ac-linegraph" viewBox="0 0 16 16"><path d="M11 4l1.49 1.53-3 2.65-2.95-2.86-5.5 5.19 1 1.09 4.5-4.35 2.95 2.7 3.95-3.47L15 8V4z"></path></symbol><symbol id="icon-sm-ac-lunch" viewBox="0 0 16 16"><path d="M7.29 7L2.2 1.98c-.89 1.64-1.06 2.35.16 3.95L5.4 8.9l1.89-1.88zm6.38-.1c1.27-1.28 1.9-3.47.88-4.46-1.01-1-3.38-.49-4.66.79-1.06 1.06-1.39 2.49-.92 3.51l-6.5 6.5.94.95L8 9.6l4.59 4.58.94-.94-4.59-4.58.98-.98c1.02.47 2.69.26 3.75-.8z"></path></symbol><symbol id="icon-sm-ac-loop" viewBox="0 0 16 16"><path d="M9.86 8h2a3.88 3.88 0 0 1-5.73 3.53l-.97.98A5.21 5.21 0 0 0 13.19 8l2-.01-2.67-2.67L9.86 8zM8 4c.67 0 1.31.17 1.87.47l.97-.98a5.2 5.2 0 0 0-8 4.52h-2l2.67 2.67 2.67-2.66h-2C4.18 5.82 5.79 4 8 4z"></path></symbol><symbol id="icon-sm-ac-meeting" viewBox="0 0 16 16"><path d="M10.98 7.02a2 2 0 0 0 2-2 2 2 0 1 0-2 2zm-5.96 0a2 2 0 0 0 2-2 2 2 0 1 0-2 2zm-.04 1.65C3.42 8.67.3 9.45.3 11v1.67h9.33V11c0-1.55-3.11-2.33-4.66-2.33zm5.96 0l-.65.03c.77.56 1.31 1.31 1.31 2.3v1.67h4V11c0-1.55-3.1-2.33-4.66-2.33z"></path></symbol><symbol id="icon-sm-ac-padlock" viewBox="0 0 16 16"><path d="M11.33 4.99V4a3.33 3.33 0 1 0-6.66 0v.99H4c-.97 0-1.97 1-1.97 2.02v5.9C2.03 14.34 3.01 15 4 15h8c1 0 1.98-1.01 1.98-2.01V7c0-.94-.96-2.02-1.98-2.02h-.67zm-3.32 6.56a1.5 1.5 0 0 1-1.5-1.5c0-.82.68-1.5 1.5-1.5a1.5 1.5 0 1 1 0 3zM10 5H6V4c0-1 .86-1.99 2-1.99 1.14 0 2 .99 2 1.99v1z"></path></symbol><symbol id="icon-sm-ac-plane" viewBox="0 0 16 16"><path d="M13.99 9L8.93 6l.08-3.66c0-.75-.5-1.34-1.02-1.34s-.95.53-.95 1.34V6L1.99 9v1.66L7.04 9v3.67l-1 .37V15L8 14l1.99 1v-1.96l-1.05-.37V9L14 10.53V9z"></path></symbol><symbol id="icon-sm-ac-picture" viewBox="0 0 16 16"><path d="M14 12V4.03C14 2.51 13.46 2 12.02 2h-8C2.47 2 2 2.57 2 4.03V12c0 1.48.51 2 2.01 2h8.01c1.46 0 1.98-.47 1.98-2zm-6.75-1.46L9.67 8 13 12H3l2.66-3 1.58 1.54z"></path></symbol><symbol id="icon-sm-ac-presentation" viewBox="0 0 16 16"><path d="M7.03 11.04l2.72-3-2.72-3v6zM3.4 1C1.66 1 1 1.6 1 3.35v9.27C1 14.38 1.58 15 3.4 15h9.27c1.76 0 2.33-.62 2.33-2.38V3.35C15 1.7 14.4 1 12.67 1H3.39zM13 13H3V3h10v10z"></path></symbol><symbol id="icon-sm-ac-pricetag" viewBox="0 0 16 16"><path d="M14.53 7.98l-6.56-6.6A1.32 1.32 0 0 0 7.03 1H2.37c-.74 0-1.34.6-1.34 1.33v4.66c0 .37.15.7.4.95l6.22 6.64a1.32 1.32 0 0 0 1.88 0l5-4.71a1.3 1.3 0 0 0 0-1.89zM4.04 5.47a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path></symbol><symbol id="icon-sm-ac-scissors" viewBox="0 0 16 16"><path d="M6.68 5.35l7.99 7.98V14h-2L8 9.33l-1.32 1.32a3 3 0 1 1-1.33-1.33L6.67 8 5.35 6.68a3 3 0 1 1 1.33-1.33zM12.67 2h2v.67L10 7.33 8.67 6l4-4zM4 5.33a1.33 1.33 0 1 0 0-2.66 1.33 1.33 0 0 0 0 2.66zm0 8a1.33 1.33 0 1 0 0-2.66 1.33 1.33 0 0 0 0 2.66z"></path></symbol><symbol id="icon-sm-ac-search" viewBox="0 0 16 16"><path d="M10.58 9.26L14 12.68 12.68 14l-3.42-3.42a4.68 4.68 0 1 1 1.32-1.32zm-3.9.22a2.8 2.8 0 1 0 0-5.6 2.8 2.8 0 0 0 0 5.6z"></path></symbol><symbol id="icon-sm-ac-shuffle" viewBox="0 0 16 16"><path d="M6.88 5.86L2.99 1.98 1.93 3.04l3.88 3.88 1.07-1.06zm3-3.86l1.52 1.53L2 12.94 3.06 14l9.41-9.4L14 6.12V2H9.87zM9 10.06l2.35 2.34-1.54 1.54h4.13V9.82l-1.54 1.53L10.06 9 9 10.06z"></path></symbol><symbol id="icon-sm-ac-signpost" viewBox="0 0 16 16"><path d="M7.03 14.58c0 .23.45.42.64.42h.66c.19 0 .69-.2.69-.42v-2.54h-2v2.54zM4.4 8.03a.36.36 0 0 0-.2.07l-2 1.5c-.12.1-.2.25-.2.43s.08.34.2.43l2 1.5c.06.04.13.07.2.07h8.18c.23 0 .41-.23.41-.5v-3c0-.28-.18-.5-.4-.5H4.4zm2.62-5.02V1.4c0-.22.15-.4.33-.4h1.28c.19 0 .34.18.34.4V3h2.69c.07 0 .15.03.21.08l1.92 1.48c.12.1.2.26.2.43 0 .18-.08.34-.2.43l-1.7 1.5a.36.36 0 0 1-.22.07H3.44c-.23 0-.41-.22-.41-.5v-3c0-.27.18-.5.4-.5h3.59z"></path></symbol><symbol id="icon-sm-ac-smartphone" viewBox="0 0 16 16"><path d="M4.76 0C3.86 0 3 .9 3 1.89v12.23C3 15.1 4 16 4.9 16h6.19c.9 0 1.91-.9 1.91-1.88V1.89c0-1-.39-1.89-1.3-1.89H4.77zM8 15a1 1 0 1 1 0-1.99 1 1 0 0 1 0 2zm3-3H5V2.02L11 2v10z"></path></symbol><symbol id="icon-sm-ac-sound" viewBox="0 0 16 16"><path d="M2 6v4h2.67L8 14V2L4.67 6H2zm9 2.06c0-1.32-.82-2.45-2-3v6c1.18-.55 2-1.68 2-3zM9 2v1.4A4.82 4.82 0 0 1 12.57 8c0 2.17-1.5 4-3.57 4.6V14c2.86-.62 5-3.07 5-6a6.22 6.22 0 0 0-5-6z"></path></symbol><symbol id="icon-sm-ac-suitcase" viewBox="0 0 16 16"><path d="M9.02 10v-.97h4.92v4.95c0 .56-.31 1.02-.94 1.02H3.1c-.63 0-1.08-.24-1.08-1.02V9.03H7v.98h2.02zm2.89-5.97h1.95c.5 0 1.14.6 1.14 1.1V6.9c0 .54-.6 1.1-1.14 1.1H9V7H6.97v1H2.11C1.55 8 1 7.4 1 6.9V5c0-.56.48-.97 1-.97h2.04v-2c0-.58.4-1.03.93-1.03h5.96c.5 0 .98.49.98 1.02v2zm-1.92-.04V3H6.03v1H10z"></path></symbol><symbol id="icon-sm-ac-task" viewBox="0 0 16 16"><path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM2.48 8.04a5.5 5.5 0 1 1 11 0 5.5 5.5 0 0 1-11 0zM8.3 5.07H7.29V8l2.59 2.92.87-.82L8.3 7.68V5.07z"></path></symbol><symbol id="icon-sm-ac-tool" viewBox="0 0 16 16"><path d="M9.02 6.6a4.08 4.08 0 0 0-.95-4.38 4.2 4.2 0 0 0-4.7-.83L6.1 4.12 4.19 6.03 1.39 3.3A4.1 4.1 0 0 0 2.22 8a4.08 4.08 0 0 0 4.38.95l5.79 5.79c.25.25.63.25.89 0l1.46-1.47c.31-.25.31-.7.06-.89L9.02 6.6z"></path></symbol><symbol id="icon-sm-ac-truck" viewBox="0 0 16 16"><path d="M2 10.97h-.97V4c0-.5.57-1 .97-1h8v2.01h1.96l.37.32 2.65 2.7v2.94h-.96v.07a2 2 0 1 1-4-.07H6V11a2 2 0 1 1-4-.03zm1 .26a1 1 0 1 0 2 0c0-.55-2-.55-2 0zm9-5.26h-1v2.06h2.01V7l-1-1.03zm-1 5.33a1 1 0 1 0 2 0c0-.55-2-.55-2 0z"></path></symbol><symbol id="icon-sm-ac-uparrow" viewBox="0 0 16 16"><path d="M13.7 3.49l-.93-1.12A.97.97 0 0 0 12 2H4a1 1 0 0 0-.77.37L2.3 3.49c-.2.21-.3.51-.3.84v8.34C2 13.4 2.6 14 3.33 14h9.34c.73 0 1.33-.6 1.33-1.33V4.33c0-.32-.11-.62-.3-.84zm-2.32 6.75h-2.4v1.4H6.95v-1.4H4.5L8.01 6.5l3.37 3.74zM4 3h8.06v.98H4V3z"></path></symbol><symbol id="icon-sm-ac-wifi" viewBox="0 0 16 16"><path d="M2.28 7.45a8.04 8.04 0 0 1 11.46 0l1.2-1.39A9.62 9.62 0 0 0 1.11 6l1.16 1.46zm5.73 6.13l1.91-1.81a2.68 2.68 0 0 0-3.81 0l1.9 1.8zm-3.2-3.26a4.47 4.47 0 0 1 6.36 0l1.36-1.58a6.38 6.38 0 0 0-9 .1l1.28 1.48z"></path></symbol><symbol id="icon-sm-apps" viewBox="0 0 16 16"><path d="M2 2h3v3H2V2zm4.5 0h3v3h-3V2zM11 2h3v3h-3V2zM2 6.5h3v3H2v-3zm4.5 0h3v3h-3v-3zm4.5 0h3v3h-3v-3zM2 11h3v3H2v-3zm4.5 0h3v3h-3v-3zm4.5 0h3v3h-3v-3z"></path></symbol><symbol id="icon-sm-ac-world" viewBox="0 0 16 16"><path d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM6.96 13.55C4.19 13.21 2.4 10.85 2.4 8c0-.43.06-.85.15-1.25L5.9 10.1v.84c0 .77 1.04 1.2 1.81 1.2v1.41h-.75zm3.84-2.75l-.8.2.1-2.3a.7.7 0 0 0-.7-.7H4.98V6.95h1.87c.38 0 .45-.6.45-1V4.5h1.47c.77 0 1.33-.63 1.33-1.4v-.29a5.6 5.6 0 0 1 2.03 8.96 1.4 1.4 0 0 0-1.33-.97z"></path></symbol><symbol id="icon-sm-archive" viewBox="0 0 16 16"><path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v2H1V3zm1 3h12v8a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6zm8 3H6v2h4V9z"></path></symbol><symbol id="icon-sm-arrow-down" viewBox="0 0 16 16"><path d="M10.9 6L12 7.04 8 11 4 7.04 5.06 6 8 8.92z"></path></symbol><symbol id="icon-sm-arrow-left" viewBox="0 0 16 16"><path d="M10 5.1L8.96 4 5 8l3.96 4L10 10.94 7.08 8z"></path></symbol><symbol id="icon-sm-arrow-right" viewBox="0 0 16 16"><path d="M6 5.1L7.04 4 11 8l-3.96 4L6 10.94 8.92 8z"></path></symbol><symbol id="icon-sm-arrow-up" viewBox="0 0 16 16"><path d="M10.9 10L12 8.96 8 5 4 8.96 5.06 10 8 7.08z"></path></symbol><symbol id="icon-sm-arrowdouble-left" viewBox="0 0 16 16"><path d="M8 5.1L5.08 8 8 10.94 6.96 12 3 8l3.96-4L8 5.1zm4 0L9.08 8 12 10.94 10.96 12 7 8l3.96-4L12 5.1z"></path></symbol><symbol id="icon-sm-arrowdouble-right" viewBox="0 0 16 16"><path d="M8 5.1L9.04 4 13 8l-3.96 4L8 10.94 10.92 8 8 5.1zm-4 0L5.04 4 9 8l-3.96 4L4 10.94 6.92 8 4 5.1z"></path></symbol><symbol id="icon-sm-attention-outline" viewBox="0 0 16 16"><path d="M9.07 2.8l5.68 10.12c.6 1.06.1 1.91-1.1 1.91H2.35c-1.2 0-1.7-.85-1.1-1.9L6.93 2.78c.6-1.05 1.55-1.06 2.14 0zM3 13h10L7.99 4 3 13zm4-6.5h2V10H7V6.5zM7 11h2v1.5H7V11z"></path></symbol><symbol id="icon-sm-backspace" viewBox="0 0 16 16"><path d="M15 7H4.83l2.58-2.59L6 3 1 8l5 5 1.41-1.41L4.83 9H15z"></path></symbol><symbol id="icon-sm-calendar" viewBox="0 0 16 16"><path d="M11 9H8v3h3V9zm-1-6H6V1H4v2a2 2 0 0 0-1.99 2L2 13a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2V1h-2v2zm2 10H4V7h8v6z"></path></symbol><symbol id="icon-sm-check-done" viewBox="0 0 16 16"><path d="M5.47 6.75L4 8.19l3.26 3.16 4.95-4.91L10.75 5 7.26 8.52z"></path></symbol><symbol id="icon-sm-check" viewBox="0 0 16 16"><path d="M3.35 6.92L1.88 8.36l4.13 4.01L13.7 4.8l-1.46-1.44-6.23 6.18z"></path></symbol><symbol id="icon-sm-cogs" viewBox="0 0 16 16"><path d="M6.67 1.5h2.66c.17 0 .3.13.32.3l.17 1.68c.43.17.83.4 1.18.68l1.55-.7a.33.33 0 0 1 .41.14l1.33 2.3c.09.15.05.33-.09.43l-1.37.99a4.92 4.92 0 0 1 0 1.36l1.37 1c.14.09.18.27.1.42l-1.34 2.3a.33.33 0 0 1-.41.14l-1.55-.7a4.6 4.6 0 0 1-1.18.68l-.17 1.69a.33.33 0 0 1-.32.29H6.67a.33.33 0 0 1-.33-.3l-.16-1.68c-.43-.17-.83-.4-1.19-.68l-1.54.7a.33.33 0 0 1-.42-.14L1.7 10.1a.32.32 0 0 1 .1-.43l1.37-.99a4.92 4.92 0 0 1 0-1.36l-1.37-1a.32.32 0 0 1-.1-.42l1.33-2.3c.09-.15.27-.2.42-.14l1.54.7c.36-.28.76-.51 1.19-.68l.16-1.69a.33.33 0 0 1 .33-.29zM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path></symbol><symbol id="icon-sm-collapse" viewBox="0 0 16 16"><path d="M8.03 5.53L11.56 2l.94.94-4.47 4.47-4.47-4.47L4.5 2l3.53 3.53zm-4.47 7.54L8.03 8.6l4.47 4.47-.94.94-3.53-3.52L4.5 14l-.94-.94z"></path></symbol><symbol id="icon-sm-copy" viewBox="0 0 16 16"><path d="M3 0a2 2 0 0 0-2 2v10h2V2h7V0H3zm10.67 4H6.33C5.6 4 5 4.6 5 5.33v9.34C5 15.4 5.6 16 6.33 16h7.34c.73 0 1.33-.6 1.33-1.33V5.33C15 4.6 14.4 4 13.67 4zM13 14H7V6h6v8z"></path></symbol><symbol id="icon-sm-cross" viewBox="0 0 16 16"><path d="M13.01 4.41L11.6 3 8 6.59 4.42 3 3.01 4.41 6.59 8l-3.58 3.59L4.42 13 8 9.41 11.6 13l1.41-1.41L9.41 8z"></path></symbol><symbol id="icon-sm-deal" viewBox="0 0 16 16"><path d="M8 16A8 8 0 1 1 8 0a8 8 0 0 1 0 16zm.26-8.71c-1.5-.39-1.97-.78-1.97-1.4 0-.7.66-1.2 1.77-1.2 1.16 0 1.6.56 1.64 1.37h1.44a2.6 2.6 0 0 0-2.1-2.47V2.17H7.08v1.4c-1.27.27-2.3 1.09-2.3 2.34 0 1.5 1.26 2.24 3.08 2.67 1.64.4 1.97.96 1.97 1.57 0 .44-.32 1.16-1.77 1.16-1.35 0-1.88-.6-1.95-1.37H4.67c.08 1.42 1.15 2.22 2.4 2.49v1.4h1.97v-1.39c1.28-.24 2.3-.97 2.3-2.3 0-1.84-1.6-2.47-3.08-2.85z"></path></symbol><symbol id="icon-sm-ellipsis" viewBox="0 0 16 16"><path d="M4 6.67c-.73 0-1.33.6-1.33 1.33 0 .73.6 1.33 1.33 1.33.73 0 1.33-.6 1.33-1.33 0-.73-.6-1.33-1.33-1.33zm8 0c-.73 0-1.33.6-1.33 1.33 0 .73.6 1.33 1.33 1.33.73 0 1.33-.6 1.33-1.33 0-.73-.6-1.33-1.33-1.33zm-4 0c-.73 0-1.33.6-1.33 1.33 0 .73.6 1.33 1.33 1.33.73 0 1.33-.6 1.33-1.33 0-.73-.6-1.33-1.33-1.33z"></path></symbol><symbol id="icon-sm-drag-handle" viewBox="0 0 16 16"><path d="M14 5H2v2h12V5zM2 11h12V9H2v2z"></path></symbol><symbol id="icon-sm-email-mark-as-unread" viewBox="0 0 16 16"><path d="M13 7a3 3 0 1 1 0-6 3 3 0 0 1 0 6zM2.5 3h6.63a4 4 0 0 0-.1 1.5H2.5l5.5 4 2.23-1.62a4 4 0 0 0 1.05.73L8 10 2.5 6v6.5h11V7.97a3.97 3.97 0 0 0 1.5-.5v5.03c0 .83-.67 1.5-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-8C1 3.67 1.67 3 2.5 3z"></path></symbol><symbol id="icon-sm-email-outline" viewBox="0 0 16 16"><path d="M2.5 3h11c.83 0 1.5.67 1.5 1.5v8c0 .83-.67 1.5-1.5 1.5h-11A1.5 1.5 0 0 1 1 12.5v-8C1 3.67 1.67 3 2.5 3zm0 9.5h11V6L8 10 2.5 6v6.5zm11-8h-11l5.5 4 5.5-4z"></path></symbol><symbol id="icon-sm-email" viewBox="0 0 16 16"><path d="M2.5 2C1.67 2 1 2.67 1 3.5v9c0 .83.67 1.5 1.5 1.5h11c.83 0 1.5-.67 1.5-1.5v-9c0-.83-.67-1.5-1.5-1.5h-11zM2 3l6 4 6-4v2L8 9 2 5V3z"></path></symbol><symbol id="icon-sm-expand" viewBox="0 0 16 16"><path d="M8 3.47L4.47 7l-.94-.94L8 1.59l4.47 4.47-.94.94L8 3.47zm4.47 6.46L8 14.4 3.53 9.93l.94-.94L8 12.5 11.53 9l.94.94z"></path></symbol><symbol id="icon-sm-file" viewBox="0 0 16 16"><path d="M1 8.5C1 6.64 2.64 5 4.67 5H12c1.7 0 3 .66 3 2.5 0 1.84-1.35 2.5-3 2.5H6c-1 0-2-.25-2-1.5S5 7 6 7h5v1H6c-.65 0-1 0-1 .5s.33.5 1 .5h6c1 0 2-.27 2-1.5S13.1 6 12 6H4.67C3.19 6 2 7.2 2 8.5 2 10.14 3.22 11 4.67 11H11v1H4.67C2.63 12 1 10.7 1 8.5z"></path></symbol><symbol id="icon-sm-filter" viewBox="0 0 16 16"><path d="M6 12h4v-2H6v2zM2 4v2h12V4H2zm2 5h8V7H4v2z"></path></symbol><symbol id="icon-sm-finish-flag" viewBox="0 0 16 16"><path d="M9.5 2H15v10H9l-.5 2H1V4h8l.5-2zM2 7v2h2V7H2zm4 0v2h2V7H6zm0 4v2h2v-2H6zm-4 0v2h2v-2H2zm2-6v2h2V5H4zm4 0v2h2V5H8zm2-2v2h2V3h-2zm2 2v2h2V5h-2zM8 9v2h2V9H8zm2-2v2h2V7h-2zm2 2v2h2V9h-2zM4 9v2h2V9H4z"></path></symbol><symbol id="icon-sm-forecast" viewBox="0 0 16 16"><path d="M3.05 3.05a7 7 0 0 1 9.9 0l1.66-1.65v4.4h-4.4l1.64-1.65A5.44 5.44 0 1 0 13.44 8H15A7 7 0 1 1 3.05 3.05zm5.13 4.47c1.04.26 2.15.68 2.15 1.9 0 .9-.7 1.38-1.6 1.54v.93H7.35v-.94c-.88-.18-1.63-.7-1.68-1.65h1c.06.5.43.9 1.37.9 1.01 0 1.24-.47 1.24-.77 0-.4-.23-.78-1.38-1.04C6.62 8.1 5.75 7.6 5.75 6.6c0-.83.71-1.37 1.6-1.56v-.93h1.38v.95c.96.22 1.44.9 1.47 1.64h-1c-.03-.54-.33-.9-1.15-.9-.77 0-1.24.32-1.24.8 0 .4.34.67 1.38.92z"></path></symbol><symbol id="icon-sm-forward" viewBox="0 0 16 16"><path d="M8 6V3l5 5-5 5v-3H2V6z"></path></symbol><symbol id="icon-sm-fullscreen" viewBox="0 0 16 16"><path d="M2 7V3h5v2H4v2H2zm0 2h2v2h3v2H2V9zm12-2h-2V5H9V3h5v4zm0 2v4H9v-2h3V9h2z"></path></symbol><symbol id="icon-sm-gift" viewBox="0 0 16 16"><path d="M13 5a2 2 0 0 1 2 2v6a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2l.01-6c0-1.11.88-2 1.99-2-.67-.5-1-1-1-1.5C2 2 3.34 1 5 1c1.05 0 1.96.54 2.5 1.34l.5.68.5-.67A3 3 0 0 1 11 1c1.66 0 3 1 3 2.5 0 .23-.33.73-1 1.5zm-2.7-1.7c-.27.25-.67.81-1.22 1.68 1.5.08 2.37-.01 2.63-.27a1 1 0 0 0 0-1.42 1 1 0 0 0-1.42 0zm-4.6 0a1 1 0 0 0-1.4 0 1 1 0 0 0 0 1.4c.3.34 1.21.43 2.71.28a19.68 19.68 0 0 0-1.3-1.69zM13 13v-2H9v2h4zm-6 0v-2H3v2h4zm0-4V7H3v2h4zm6 0V7H9v2h4z"></path></symbol><symbol id="icon-sm-goal" viewBox="0 0 16 16"><path d="M10.8 6.06L8.74 8.14a1.23 1.23 0 1 1-.87-.87l2.08-2.08V4.04L12.98 1l.14 1.88 1.88.14-3.04 3.04h-1.15zM9.05 4.65l-1 .99a2.86 2.86 0 1 0 2.32 2.31l1-1a4.08 4.08 0 0 1-3.82 5.6 4.09 4.09 0 1 1 1.5-7.9zm1.08-2.21l-.95.95a5.31 5.31 0 1 0 3.45 3.48l.96-.95a6.54 6.54 0 1 1-3.46-3.48z"></path></symbol><symbol id="icon-sm-help-outline" viewBox="0 0 16 16"><path d="M7.1 12.9h1.8v-1.8H7.1v1.8zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm0 14a6 6 0 1 1 .02-12.02A6 6 0 0 1 8 14zM4.8 6.4h1.6c0-.88.72-1.6 1.6-1.6.88 0 1.6.72 1.6 1.6 0 1.6-2.57 1.4-2.57 4h1.92c0-1.8 2.25-2 2.25-4a3.2 3.2 0 1 0-6.4 0z"></path></symbol><symbol id="icon-sm-help" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm1 13H7v-2h2v2zm.63-4.98c-.54.51-.57.93-.57 1.98H7v-.35c0-.77.46-1.47 1-1.98l1.06-.93c.27-.25.44-.56.44-.94 0-.77-.68-1.15-1.5-1.15-.83 0-1.54.56-1.54 1.33h-1.5C4.96 4.44 6.26 3 7.91 3 9.57 3 11 4.25 11 5.8c0 .62-.27 1.18-.7 1.58l-.67.64z"></path></symbol><symbol id="icon-sm-inbox" viewBox="0 0 16 16"><path d="M1 3c0-1.1.9-2 2-2h10a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3zm2 0v7h3a2 2 0 1 0 4 0h3V3H3z"></path></symbol><symbol id="icon-sm-info-outline" viewBox="0 0 16 16"><path d="M7 12h2V7H7v5zM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm0 14a6 6 0 1 1 .02-12.02A6 6 0 0 1 8 14zM7 6h2V4H7v2z"></path></symbol><symbol id="icon-sm-info" viewBox="0 0 16 16"><path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm1 12H7V8h2v4zm0-6H7V4h2v2z"></path></symbol><symbol id="icon-sm-link" viewBox="0 0 16 16"><path d="M2.33 7.5c0-1.2.97-2.17 2.17-2.17h2.8V4H4.5a3.5 3.5 0 0 0 0 7h2.8V9.67H4.5c-1.2 0-2.17-.97-2.17-2.17zm2.87.7h5.6V6.8H5.2v1.4zM11.5 4H8.7v1.33h2.8a2.17 2.17 0 0 1 0 4.34H8.7V11h2.8a3.5 3.5 0 0 0 0-7z"></path></symbol><symbol id="icon-sm-list" viewBox="0 0 16 16"><path d="M2 2h12v2H2V2zm0 3h12v2H2V5zm0 3h12v2H2V8zm0 3h12v2H2v-2z"></path></symbol><symbol id="icon-sm-locked" viewBox="0 0 16 16"><path d="M3.46 6C2.66 6 2 6.67 2 7.49v7.02c0 .82.66 1.49 1.46 1.49h9.08c.8 0 1.46-.67 1.46-1.49V7.49C14 6.67 13.34 6 12.54 6H3.46zm3.04 5c0-.82.67-1.5 1.5-1.5.82 0 1.5.68 1.5 1.5s-.68 1.5-1.5 1.5A1.5 1.5 0 0 1 6.5 11zM4 4.04A3.9 3.9 0 0 1 8 0c2.1 0 4 1.48 4 4v2.02H9.99V4.04C9.99 2.7 9.26 2 8 2s-1.99.71-1.99 2.04v1.98H4V4.04z"></path></symbol><symbol id="icon-sm-mail" viewBox="0 0 16 16"><path d="M2.5 2C1.67 2 1 2.67 1 3.5v9c0 .83.67 1.5 1.5 1.5h11c.83 0 1.5-.67 1.5-1.5v-9c0-.83-.67-1.5-1.5-1.5h-11zM2 3l6 4 6-4v2L8 9 2 5V3z"></path></symbol><symbol id="icon-sm-logout" viewBox="0 0 16 16"><path d="M14 13V3a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v2h2V3h8v10H4v-2H2v2c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2zm-4-5L7 5v2H2v2h5v2l3-3z"></path></symbol><symbol id="icon-sm-minus" viewBox="0 0 16 16"><path d="M3 9V7h10v2z"></path></symbol><symbol id="icon-sm-move-to-inbox" viewBox="0 0 16 16"><path d="M1 3c0-1.1.9-2 2-2h3v2H3v7h3a2 2 0 1 0 4 0h3V3h-3V1h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3zm6-2h2v4h2L8 8 5 5h2V1z"></path></symbol><symbol id="icon-sm-note" viewBox="0 0 16 16"><path d="M2 4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v6.85L10.84 14H4.01A2 2 0 0 1 2 12V4zm2 2v1h8V6H4zm0-2v1h8V4H4zm0 4v1h4V8H4zm6 2v3.33L13.33 10H10z"></path></symbol><symbol id="icon-sm-notes" viewBox="0 0 16 16"><path d="M2 4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v6.85L10.84 14H4.01A2 2 0 0 1 2 12V4zm2 2v1h8V6H4zm0-2v1h8V4H4zm0 4v1h4V8H4zm6 2v3.33L13.33 10H10z"></path></symbol><symbol id="icon-sm-organization" viewBox="0 0 16 16"><path d="M2 2h7v12H2V2zm8 3l1.71-1h.58L14 5v9h-4V5zm1 2v1h2V7h-2zm0 4v1h2v-1h-2zm0-2v1h2V9h-2zM3 5v1h2V5H3zm0 2v1h2V7H3zm0 2v1h2V9H3zm0 2v1h2v-1H3zm3-6v1h2V5H6zm0 2v1h2V7H6zm0 2v1h2V9H6zm0 2v1h2v-1H6z"></path></symbol><symbol id="icon-sm-pencil" viewBox="0 0 16 16"><path d="M2 14h2.5l7.13-7.1-2.5-2.5L2 11.5V14zm11.8-9.3a.66.66 0 0 0 0-.95L12.26 2.2a.66.66 0 0 0-.94 0L10.1 3.42l2.5 2.5 1.2-1.22z"></path></symbol><symbol id="icon-sm-person" viewBox="0 0 16 16"><path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm0 1.5c-2 0-6 1-6 3V14h12v-1.5c0-2-4-3-6-3z"></path></symbol><symbol id="icon-sm-pipeline" viewBox="0 0 16 16"><path d="M6 2v12h3V2H6zm7 0h-3v6h3V2zM5 2v9H2V2h3z"></path></symbol><symbol id="icon-sm-plus" viewBox="0 0 16 16"><path d="M9 9v4H7V9H3V7h4V3h2v4h4v2z"></path></symbol><symbol id="icon-sm-product" viewBox="0 0 16 16"><path d="M2 13.39v-6.4h12v6.4a.6.6 0 0 1-.6.61H2.6a.6.6 0 0 1-.6-.61zM8 10v2h4v-2H8zm6-4H9V2h2.1c.19 0 .37.1.48.25L14 6zM7 6H2l2.43-3.75A.6.6 0 0 1 4.92 2H7v4z"></path></symbol><symbol id="icon-sm-redirect" viewBox="0 0 16 16"><path d="M12.67 12.67H3.33V3.33H8V2H3.33C2.6 2 2 2.6 2 3.33v9.34C2 13.4 2.6 14 3.33 14h9.34c.73 0 1.33-.6 1.33-1.33V8h-1.33v4.67zM9.33 2v1.33h2.4L5.17 9.9l.94.94 6.56-6.56v2.4H14V2H9.33z"></path></symbol><symbol id="icon-sm-refresh" viewBox="0 0 16 16"><path d="M11.77 4.23A5.31 5.31 0 0 0 2.67 8a5.33 5.33 0 0 0 10.48 1.33h-1.38a4 4 0 1 1-.96-4.14L8.66 7.33h4.67V2.67l-1.56 1.56z"></path></symbol><symbol id="icon-sm-reply" viewBox="0 0 16 16"><path d="M6.98 3L2 8l4.98 5v-3c3.33 0 5.35.67 7.02 3-.67-3.33-2.35-6.27-7.02-6.93V3z"></path></symbol><symbol id="icon-sm-replyall" viewBox="0 0 16 16"><path d="M5 5V3L0 8l5 5v-2L2 8l3-3zm4-2L4 8l5 5v-3c3.33 0 5.33.67 7 3-.67-3.33-2.33-6.33-7-7V3z"></path></symbol><symbol id="icon-sm-search" viewBox="0 0 16 16"><path d="M10.58 9.26L14 12.68 12.68 14l-3.42-3.42a4.68 4.68 0 1 1 1.32-1.32zm-3.9.22a2.8 2.8 0 1 0 0-5.6 2.8 2.8 0 0 0 0 5.6z"></path></symbol><symbol id="icon-sm-share" viewBox="0 0 16 16"><path d="M10.24 11.25l-3.96-2.3a1.58 1.58 0 0 0 0-.78l3.92-2.29A1.66 1.66 0 0 0 13 4.67a1.66 1.66 0 1 0-3.28.39L5.8 7.34A1.66 1.66 0 0 0 3 8.56a1.66 1.66 0 0 0 2.8 1.21l3.96 2.31c-.03.12-.05.24-.05.36a1.62 1.62 0 1 0 .53-1.19z"></path></symbol><symbol id="icon-sm-star-outline" viewBox="0 0 16 16"><path d="M8 10.76l3.05 1.84-.8-3.47 2.7-2.34-3.56-.3L8 3.2 6.6 6.5l-3.54.3 2.7 2.34-.81 3.47L8 10.76zM3.06 15.2l1.3-5.62L0 5.79l5.75-.49L8 0l2.25 5.3 5.75.5-4.37 3.78 1.31 5.62L8 12.22 3.06 15.2z"></path></symbol><symbol id="icon-sm-star" viewBox="0 0 16 16"><path d="M8 12.22l4.94 2.98-1.31-5.62L16 5.79l-5.75-.49L8 0 5.75 5.3 0 5.79l4.37 3.79-1.31 5.62z"></path></symbol><symbol id="icon-sm-thumb-down" viewBox="0 0 16 16"><path d="M14 10.5h-2.25V3H14v7.5zm-3.75 0l-3 4.5-.75-.75c-.35-.35-.85-1.38-.75-1.88V10.5H3.5C2 10.5 2 9.75 2 9l.5-4.8c.15-.7.76-1.2 1.48-1.2h6.27v7.5z"></path></symbol><symbol id="icon-sm-thumb-up" viewBox="0 0 16 16"><path d="M2 5.5h2.25V13H2V5.5zm3.75 0l3-4.5.75.75c.35.35.85 1.38.75 1.88V5.5h2.25C14 5.5 14 6.25 14 7l-.5 4.8a1.5 1.5 0 0 1-1.48 1.2H5.75V5.5z"></path></symbol><symbol id="icon-sm-timeline" viewBox="0 0 16 16"><path d="M9.94 6l1.92-1.66a5.48 5.48 0 0 0-7.69-.07 5.35 5.35 0 0 0 0 7.61 5.46 5.46 0 0 0 7.69 0 5.07 5.07 0 0 0 1.58-3.8H15c0 1.54-.68 3.54-2.05 4.89a7.04 7.04 0 0 1-9.9 0 6.87 6.87 0 0 1-.01-9.78 7 7 0 0 1 9.84 0L15 1v5H9.94zM8.4 8.38L11.12 10l-.56.94-3.33-1.97v-3.9H8.4v3.31z"></path></symbol><symbol id="icon-sm-trash" viewBox="0 0 16 16"><path d="M14 3H2V1h3.5l1-1h3l1 1 3.5.01V3zm-1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4h10z"></path></symbol><symbol id="icon-sm-triangle-down" viewBox="0 0 16 16"><path d="M3 6l5 5 5-5z"></path></symbol><symbol id="icon-sm-triangle-left" viewBox="0 0 16 16"><path d="M10 3L5 8l5 5z"></path></symbol><symbol id="icon-sm-triangle-right" viewBox="0 0 16 16"><path d="M6 13l5-5-5-5z"></path></symbol><symbol id="icon-sm-triangle-up" viewBox="0 0 16 16"><path d="M3 10l5-5 5 5z"></path></symbol><symbol id="icon-sm-unlocked" viewBox="0 0 16 16"><path d="M6 12.5c.83 0 1.5-.68 1.5-1.5S6.83 9.5 6 9.5c-.82 0-1.5.68-1.5 1.5s.68 1.5 1.5 1.5zM1.46 6C.66 6 0 6.67 0 7.49v7.02C0 15.33.65 16 1.46 16h9.08c.8 0 1.46-.67 1.46-1.49V7.5c0-.83-.65-1.5-1.46-1.5H1.46zM2 14V8h8v6H2zM8 4c0-2.5 1.9-4 4-4s4 1.48 4 4v2h-2V4c-.01-1.29-.74-2-2-2s-1.99.68-2 2l.01 2H8V4z"></path></symbol><symbol id="icon-sm-upgrade" viewBox="0 0 16 16"><path d="M6 4l1.3 2.7L10 8 7.3 9.3 6 12 4.7 9.3 2 8l2.7-1.3L6 4zm4 6.67l.65 1.35 1.35.65-1.35.64-.65 1.36-.65-1.36L8 12.67l1.35-.65.65-1.35zm1.33-9.34l.87 1.8L14 4l-1.8.86-.87 1.8-.86-1.8L8.67 4l1.8-.86.86-1.8z"></path></symbol><symbol id="icon-sm-warning-outline" viewBox="0 0 16 16"><path d="M9.07 2.8l5.68 10.12c.6 1.06.1 1.91-1.1 1.91H2.35c-1.2 0-1.7-.85-1.1-1.9L6.93 2.78c.6-1.05 1.55-1.06 2.14 0zM3 13h10L7.99 4 3 13zm4-6.5h2V10H7V6.5zM7 11h2v1.5H7V11z"></path></symbol><symbol id="icon-sm-warning" viewBox="0 0 16 16"><path d="M9.07 2.8l5.68 10.12c.6 1.06.1 1.91-1.1 1.91H2.35c-1.2 0-1.7-.85-1.1-1.9L6.93 2.78c.6-1.05 1.55-1.06 2.14 0zM7 6v4h2V6H7zm0 5v2h2v-2H7z"></path></symbol><symbol id="icon-sm-weighted" viewBox="0 0 16 16"><path d="M4.21 6.08l1.34 3.25h.54v1.34S5.45 12 3.55 12C1.64 12 1 10.67 1 10.67V9.33h.55l1.2-2.94a.5.5 0 0 1 .05-.95l4.72-1.32V2.5c0-.28.22-.5.48-.5a.5.5 0 0 1 .48.5v1.35l4.47-1.26c.25-.07.52.1.58.36a.5.5 0 0 1-.34.61l-.07.02 1.33 3.25H15v1.34s-.64 1.33-2.55 1.33c-1.9 0-2.54-1.33-2.54-1.33V6.83h.54L11.61 4l-3.13.88V13h2.22a.5.5 0 0 1 .48.5c0 .28-.21.5-.48.5H5.3a.5.5 0 0 1-.48-.5c0-.28.21-.5.48-.5h2.22V5.15l-3.3.93zm-.57.16l-.22.06-1.24 3.03h2.73L3.64 6.24zm8.91-2.5l-.22.06-1.24 3.03h2.73l-1.27-3.09z"></path></symbol><symbol id="icon-sort" viewBox="0 0 24 24"><path d="M7 10l5-5 5 5H7zm10 4l-5 5-5-5h10z"></path></symbol><symbol id="icon-star-outline" viewBox="0 0 24 24"><path d="M12 15l3.3 1.98-.88-3.75 2.91-2.52-3.83-.32L12 6.84l-1.5 3.55-3.83.32 2.91 2.52-.87 3.75L12 14.99zm-5.56 5.1l1.47-6.33L3 9.52l6.47-.55L12 3l2.53 5.97 6.47.55-4.91 4.25 1.47 6.33L12 16.74 6.44 20.1z"></path></symbol><symbol id="icon-star" viewBox="0 0 24 24"><path d="M12 16.74l5.56 3.36-1.47-6.33L21 9.52l-6.47-.55L12 3 9.47 8.97 3 9.52l4.91 4.25-1.47 6.33z"></path></symbol><symbol id="icon-text" viewBox="0 0 24 24"><path d="M5 17v2h14v-2H5zm4.5-4.2h5l.9 2.2h2.1L12.75 4h-1.5L6.5 15h2.1l.9-2.2zM12 5.98L13.87 11h-3.74L12 5.98z"></path></symbol><symbol id="icon-thread" viewBox="0 0 24 24"><path d="M3 12c0-1.1.9-2 2-2h14a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-8zm2 0v8h14v-8H5zm2 4h6v2H7v-2zm9-3h2v3h-2v-3zM5 6h14v2H5V6zm2-4h10v2H7V2z"></path></symbol><symbol id="icon-thumb-down" viewBox="0 0 24 24"><path d="M22 15h-4V3h4v12zm-6 0l-4.96 8L9 21.5c-.93-.8-.44-3.5-.44-3.5l.5-3H5.09c-3.97 0-2.98-4-2.98-4 .33-1.33.83-3.17 1.49-5.5C4.1 4 5.09 3 6.57 3H16v12z"></path></symbol><symbol id="icon-thumb-up" viewBox="0 0 24 24"><path d="M2 9h4v12H2V9zm6 0l4.96-8L15 2.5c.93.8.44 3.5.44 3.5l-.5 3h3.97c3.97 0 2.98 4 2.98 4-.33 1.33-.83 3.17-1.49 5.5-.5 1.5-1.49 2.5-2.97 2.5H8V9z"></path></symbol><symbol id="icon-timeline" viewBox="0 0 24 24"><path d="M21 10.12h-6.78l2.74-2.82a7.04 7.04 0 0 0-9.88-.1 6.88 6.88 0 0 0 0 9.79 7.02 7.02 0 0 0 9.88 0A6.51 6.51 0 0 0 19 12.1h2c0 1.98-.88 4.55-2.64 6.29a9.05 9.05 0 0 1-12.72 0 8.84 8.84 0 0 1-.02-12.58 8.99 8.99 0 0 1 12.65 0L21 3v7.12zM12.5 8v4.25l3.5 2.08-.72 1.21L11 13V8h1.5z"></path></symbol><symbol id="icon-timerange" viewBox="0 0 24 24"><path d="M16.24 7.76A5.97 5.97 0 0 0 12 6v6l-4.24 4.24a5.99 5.99 0 1 0 8.48-8.48zM12 2a10 10 0 1 0 0 20 10 10 0 0 0 0-20zm0 18a8 8 0 1 1 0-16 8 8 0 0 1 0 16z"></path></symbol><symbol id="icon-trash" viewBox="0 0 24 24"><path d="M6 19c0 1.1.9 2 2 2h8a2 2 0 0 0 2-2V7H6v12zM19 4h-3.5l-1-1h-5l-1 1H5v2h14V4z"></path></symbol><symbol id="icon-triangle-down" viewBox="0 0 24 24"><path d="M7 10l5 5 5-5z"></path></symbol><symbol id="icon-triangle-left" viewBox="0 0 24 24"><path d="M14 7l-5 5 5 5z"></path></symbol><symbol id="icon-triangle-right" viewBox="0 0 24 24"><path d="M10 17l5-5-5-5z"></path></symbol><symbol id="icon-triangle-up" viewBox="0 0 24 24"><path d="M7 14l5-5 5 5z"></path></symbol><symbol id="icon-underline" viewBox="0 0 24 24"><path d="M12 19a6 6 0 0 0 6-6V5h-2.5v8a3.5 3.5 0 0 1-7 0V5H6v8a6 6 0 0 0 6 6zm-7 1v2h14v-2H5z"></path></symbol><symbol id="icon-unlocked" viewBox="0 0 24 24"><path d="M10 17a2 2 0 0 0 2-2 2 2 0 0 0-2-2 2 2 0 0 0-2 2c0 1.1.9 2 2 2zM4 8a2 2 0 0 0-2 2v10c0 1.1.9 2 2 2h12a2 2 0 0 0 2-2V10a2 2 0 0 0-2-2H4zm12 12H4V10h12v10zM13 6a5 5 0 0 1 10 0h-2a3 3 0 0 0-6 0v2h-2V6zm8 0h2v2h-2V6z"></path></symbol><symbol id="icon-upgrade" viewBox="0 0 24 24"><path d="M9 6l1.94 4.06L15 12l-4.06 1.94L9 18l-1.94-4.06L3 12l4.06-1.94L9 6zm6 10l.97 2.03L18 19l-2.03.97L15 22l-.97-2.03L12 19l2.03-.97L15 16zm2-14l1.3 2.7L21 6l-2.7 1.3L17 10l-1.3-2.7L13 6l2.7-1.3L17 2z"></path></symbol><symbol id="icon-upload" viewBox="0 0 24 24"><path d="M19.35 10.04A4.98 4.98 0 0 1 19 20H6a6 6 0 0 1-.65-11.96 7.5 7.5 0 0 1 14 2zM14 13h3l-5-5-5 5h3v4h4v-4z"></path></symbol><symbol id="icon-warning-outline" viewBox="0 0 24 24"><path d="M13.48 4.57l7.83 13.82c.81 1.44.12 2.61-1.53 2.61H4.22c-1.66 0-2.34-1.16-1.52-2.6l7.82-13.83c.82-1.44 2.14-1.45 2.96 0zM4.65 19h14.73L12 6 4.65 19zM11 10h2v5h-2v-5zm0 6h2v2h-2v-2z"></path></symbol><symbol id="icon-user" viewBox="0 0 24 24"><path d="M12 2a10 10 0 1 1 0 20 10 10 0 0 1 0-20zm0 3a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 14.2a7.2 7.2 0 0 0 6-3.22c-.03-1.99-4.01-3.08-6-3.08-2 0-5.97 1.09-6 3.08a7.2 7.2 0 0 0 6 3.22z"></path></symbol><symbol id="icon-warning" viewBox="0 0 24 24"><path d="M13.48 4.57l7.83 13.82c.81 1.44.12 2.61-1.53 2.61H4.22c-1.66 0-2.34-1.16-1.52-2.6l7.82-13.83c.82-1.44 2.14-1.45 2.96 0zM11 10v5h2v-5h-2zm0 6v2h2v-2h-2z"></path></symbol></svg>
	</div>


<div id="bottomAd" style="position: absolute; top: -1000px; left: -1000px; width: 1px; height: 1px;"></div><div class="globalNotificationsContainer"></div><div id="global-search-results"><ul class="search-filters"><li class="search-filters__filter">
	<a href="" class="search-filters__button search-filters__button--text active" data-filter="">
		Alle
	</a>
</li>
<li class="search-filters__filter">
	<a href="" class="search-filters__button" data-filter="deal" data-tooltip="Deals">
		<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-deal" href="#icon-sm-deal"></use></svg>
	</a>
</li>
<li class="search-filters__filter">
	<a href="" class="search-filters__button" data-filter="person" data-tooltip="Kontakte">
		<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-person" href="#icon-sm-person"></use></svg>
	</a>
</li>
<li class="search-filters__filter">
	<a href="" class="search-filters__button" data-filter="organization" data-tooltip="Organisationen">
		<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-organization" href="#icon-sm-organization"></use></svg>
	</a>
</li>

<li class="search-filters__filter">
	<a href="" class="search-filters__button" data-filter="file" data-tooltip="Dateien">
		<svg class="cui4-icon cui4-icon--s"><use xlink:href="#icon-sm-file" href="#icon-sm-file"></use></svg>
	</a>
</li></ul><div class="gs-filters-promo"><div class="arrow-up"></div>
<div class="promo-container">
    <p> Versuchen Sie, die Ergebnisse mit Filtern einzugrenzen <span class="close"></span> </p>
</div>
</div><div class="search-results-container" style="height: 0px;"><ul class="search-results"><li class="search-message support-center">Keine Ergebnisse für . Suchen Sie stattdessen im <a id="support-center-link" href=""> Support Center </a>.</li></ul></div></div><div id="tooltip" style="visibility: hidden; display: none;"><div class="cui4-tooltip__arrow"><div class="cui4-tooltip__arrow-inner"></div></div><div class="cui4-tooltip__inner"><div class="cui4-spacing cui4-spacing--top-xs cui4-spacing--right-s cui4-spacing--bottom-xs cui4-spacing--left-s" id="tooltipContainer"></div></div></div><iframe id="intercom-frame" style="position: absolute !important; opacity: 0 !important; width: 1px !important; height: 1px !important; top: 0 !important; left: 0 !important; border: none !important; display: block !important; z-index: -1 !important;" aria-hidden="true" tabindex="-1" src="./data/saved_resource(1).html"></iframe><div id="intercom-css-container"><style data-emotion="intercom-global"></style></div><div id="intercom-container" class="intercom-namespace"><style>html.intercom-mobile-messenger-active,html.intercom-mobile-messenger-active > body,html.intercom-modal-open,#intercom-container-body{overflow:hidden !important;}html.intercom-mobile-messenger-active,html.intercom-mobile-messenger-active > body{position:static !important;}html.intercom-mobile-messenger-active > body{height:0 !important;margin:0 !important;}iframe#intercom-frame{position:absolute !important;opacity:0 !important;width:1px !important;height:1px !important;top:0 !important;left:0 !important;border:none !important;display:block !important;z-index:-1 !important;}</style><div class="intercom-app" aria-live="polite"><div id="intercom-modal-container"></div></div></div><span role="status" aria-live="polite" class="select2-hidden-accessible"></span><span role="status" aria-live="polite" class="select2-hidden-accessible"></span><ul id="widget-ac-results" style="display: none;"></ul><span role="status" aria-live="polite" class="select2-hidden-accessible"></span><div class="pika-single is-hidden is-bound" style="position: static; left: auto; top: auto;"></div><div class="time-picker" style="display: none;"><ul><li>00:00</li><li>00:15</li><li>00:30</li><li>00:45</li><li>01:00</li><li>01:15</li><li>01:30</li><li>01:45</li><li>02:00</li><li>02:15</li><li>02:30</li><li>02:45</li><li>03:00</li><li>03:15</li><li>03:30</li><li>03:45</li><li>04:00</li><li>04:15</li><li>04:30</li><li>04:45</li><li>05:00</li><li>05:15</li><li>05:30</li><li>05:45</li><li>06:00</li><li>06:15</li><li>06:30</li><li>06:45</li><li>07:00</li><li>07:15</li><li>07:30</li><li>07:45</li><li>08:00</li><li>08:15</li><li>08:30</li><li>08:45</li><li>09:00</li><li>09:15</li><li>09:30</li><li>09:45</li><li>10:00</li><li>10:15</li><li>10:30</li><li>10:45</li><li>11:00</li><li>11:15</li><li>11:30</li><li>11:45</li><li>12:00</li><li>12:15</li><li>12:30</li><li>12:45</li><li>13:00</li><li>13:15</li><li>13:30</li><li>13:45</li><li>14:00</li><li>14:15</li><li>14:30</li><li>14:45</li><li>15:00</li><li>15:15</li><li>15:30</li><li>15:45</li><li>16:00</li><li>16:15</li><li>16:30</li><li>16:45</li><li>17:00</li><li>17:15</li><li>17:30</li><li>17:45</li><li>18:00</li><li>18:15</li><li>18:30</li><li>18:45</li><li>19:00</li><li>19:15</li><li>19:30</li><li>19:45</li><li>20:00</li><li>20:15</li><li>20:30</li><li>20:45</li><li>21:00</li><li>21:15</li><li>21:30</li><li>21:45</li><li>22:00</li><li>22:15</li><li>22:30</li><li>22:45</li><li>23:00</li><li>23:15</li><li>23:30</li><li>23:45</li></ul></div><div class="time-picker" style="display: none;"><ul><li>00:15</li><li>00:30</li><li>00:45</li><li>01:00</li><li>01:15</li><li>01:30</li><li>01:45</li><li>02:00</li><li>02:15</li><li>02:30</li><li>02:45</li><li>03:00</li><li>03:15</li><li>03:30</li><li>03:45</li><li>04:00</li><li>04:15</li><li>04:30</li><li>04:45</li><li>05:00</li><li>05:15</li><li>05:30</li><li>05:45</li><li>06:00</li><li>06:15</li><li>06:30</li><li>06:45</li><li>07:00</li><li>07:15</li><li>07:30</li><li>07:45</li><li>08:00</li></ul></div><span role="status" aria-live="polite" class="select2-hidden-accessible"></span><span role="status" aria-live="polite" class="select2-hidden-accessible"></span><span role="status" aria-live="polite" class="select2-hidden-accessible"></span><div class="pika-single is-hidden is-bound" style="position: static; left: auto; top: auto;"></div><div class="time-picker" style="display: none;"><ul><li>00:00</li><li>00:15</li><li>00:30</li><li>00:45</li><li>01:00</li><li>01:15</li><li>01:30</li><li>01:45</li><li>02:00</li><li>02:15</li><li>02:30</li><li>02:45</li><li>03:00</li><li>03:15</li><li>03:30</li><li>03:45</li><li>04:00</li><li>04:15</li><li>04:30</li><li>04:45</li><li>05:00</li><li>05:15</li><li>05:30</li><li>05:45</li><li>06:00</li><li>06:15</li><li>06:30</li><li>06:45</li><li>07:00</li><li>07:15</li><li>07:30</li><li>07:45</li><li>08:00</li><li>08:15</li><li>08:30</li><li>08:45</li><li>09:00</li><li>09:15</li><li>09:30</li><li>09:45</li><li>10:00</li><li>10:15</li><li>10:30</li><li>10:45</li><li>11:00</li><li>11:15</li><li>11:30</li><li>11:45</li><li>12:00</li><li>12:15</li><li>12:30</li><li>12:45</li><li>13:00</li><li>13:15</li><li>13:30</li><li>13:45</li><li>14:00</li><li>14:15</li><li>14:30</li><li>14:45</li><li>15:00</li><li>15:15</li><li>15:30</li><li>15:45</li><li>16:00</li><li>16:15</li><li>16:30</li><li>16:45</li><li>17:00</li><li>17:15</li><li>17:30</li><li>17:45</li><li>18:00</li><li>18:15</li><li>18:30</li><li>18:45</li><li>19:00</li><li>19:15</li><li>19:30</li><li>19:45</li><li>20:00</li><li>20:15</li><li>20:30</li><li>20:45</li><li>21:00</li><li>21:15</li><li>21:30</li><li>21:45</li><li>22:00</li><li>22:15</li><li>22:30</li><li>22:45</li><li>23:00</li><li>23:15</li><li>23:30</li><li>23:45</li></ul></div><div class="time-picker" style="display: none;"><ul><li>00:15</li><li>00:30</li><li>00:45</li><li>01:00</li><li>01:15</li><li>01:30</li><li>01:45</li><li>02:00</li><li>02:15</li><li>02:30</li><li>02:45</li><li>03:00</li><li>03:15</li><li>03:30</li><li>03:45</li><li>04:00</li><li>04:15</li><li>04:30</li><li>04:45</li><li>05:00</li><li>05:15</li><li>05:30</li><li>05:45</li><li>06:00</li><li>06:15</li><li>06:30</li><li>06:45</li><li>07:00</li><li>07:15</li><li>07:30</li><li>07:45</li><li>08:00</li></ul></div><span role="status" aria-live="polite" class="select2-hidden-accessible"></span></body></html>