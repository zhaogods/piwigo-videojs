<?php
// +-----------------------------------------------------------------------+
// | Piwigo - a PHP based photo gallery                                    |
// +-----------------------------------------------------------------------+
// | Copyright(C) 2008-2015 Piwigo Team                  http://piwigo.org |
// | Copyright(C) 2003-2008 PhpWebGallery Team    http://phpwebgallery.net |
// | Copyright(C) 2002-2003 Pierrick LE GALL   http://le-gall.net/pierrick |
// +-----------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify  |
// | it under the terms of the GNU General Public License as published by  |
// | the Free Software Foundation                                          |
// |                                                                       |
// | This program is distributed in the hope that it will be useful, but   |
// | WITHOUT ANY WARRANTY; without even the implied warranty of            |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU      |
// | General Public License for more details.                              |
// |                                                                       |
// | You should have received a copy of the GNU General Public License     |
// | along with this program; if not, write to the Free Software           |
// | Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, |
// | USA.                                                                  |
// +-----------------------------------------------------------------------+
$lang['HTML5'] = 'HTML5 video tag preferències';
$lang['PRELOAD'] = 'Precarrega';
$lang['PRELOAD_DESC'] = 'L\'atribut de precàrrega informa al navegador si les dades de vídeo han de començar a baixar-se tan aviat com es carrega l\'etiqueta de vídeo.';
$lang['CONTROLS'] = 'Controls';
$lang['CONTROLS_DESC'] = 'L\'opció de controls estableix si el reproductor té o no controls amb els quals l\'usuari pot interactuar';
$lang['AUTOPLAY'] = 'Reprodueix automàticament';
$lang['AUTOPLAY_DESC'] = 'Si la reproducció automàtica està activada, el vídeo començarà a reproduir-se tan aviat com es carregui la pàgina (sense cap interacció de l\'usuari). ELS DISPOSITIUS IOS D\'APPLE NO SÓN COMPATIBLES.';
$lang['LOOP'] = 'Bucle';
$lang['LOOP_DESC'] = 'L\'atribut loop fa que el vídeo comenci de nou tan aviat com acabi.';
$lang['VOLUME'] = 'Volum';
$lang['VOLUME_DESC'] = 'L\'opció de volum estableix el nivell de volum. 0 està apagat (silenciat), 1.0 és al màxim, 0.5 és a la meitat.';
$lang['LANGUAGE'] = 'Idioma';
$lang['LANGUAGE_DESC'] = 'Seleccioneu l\'idioma del reproductor.';

$lang['METADATA_DESC'] = 'Descripció de la metadada';

$lang['PLAYER_DESC'] = 'Seleccioneu la versió del reproductor vjs.';

$lang['SKIN'] = 'Aparença';
$lang['SKIN_DESC'] = 'Seleccioneu l\'estil que voleu aplicar al reproductor o <a href="http://designer.videojs.com/" target="_blank">creeu la vostra pròpia aparença</a>.';
$lang['CUSTOMCSS'] = 'CSS personalitzat';
$lang['CUSTOMCSS_DESC'] = 'CSS personalitzat per copiar i enganxar des del <a href="http://www.videojs.com/" target="_blank">lloc web de VideoJS</a>.';
$lang['HEIGHT'] = 'Alçada màxima';
$lang['HEIGHT_DESC'] = 'L\'atribut d\'alçada màxima defineix l\'alçada màxima de visualització del vídeo. Si l\'alçada del vídeo és més gran que l\'alçada màxima, baixarà la mida del vídeo a l\'alçada màxima.';
$lang['UPSCALE'] = 'Escala superior';
$lang['UPSCALE_DESC'] = 'Si l\'alçada del vídeo és més petita que l\'alçada màxima, augmentarà la mida del vídeo fins a l\'alçada màxima.';
$lang['ZOOMROTATE'] = 'ZoomRotate';
$lang['ZOOMROTATE_DESC'] = 'Gira i amplia un vídeo si escau, utilitza les metadades de rotació.';
$lang['THUMBNAILS'] = 'Miniatures';
$lang['THUMBNAILS_DESC'] = 'Mostra les imatges en miniatura a la barra de progrés.';
$lang['WATERMARK'] = 'Marca d\'aigua';
$lang['WATERMARK_DESC'] = 'Mostra una marca d\'aigua sobre el vídeo.';
$lang['RESOLUTION'] = 'Resolució';
$lang['RESOLUTION_DESC'] = 'Commutador de resolució.';

$lang['SYNC_ERRORS'] = 'Errors';
$lang['SYNC_WARNINGS'] = 'Avisos';
$lang['SYNC_INFOS'] = 'Informació detallada';

$lang['SYNC_METADATA_DESC'] = 'Sobreescriurà la informació de la base de dades amb les metadades del vídeo.';

$lang['SYNC_POSTER'] = 'Crea un pòster en posició en segon';
$lang['SYNC_POSTER_DESC'] = 'Crea un pòster a partir del vídeo a la posició especificada.';
$lang['SYNC_POSTEROVERWRITE'] = 'Sobreescriu els cartells existents';
$lang['SYNC_POSTEROVERWRITE_DESC'] = 'Sobreescriu les miniatures existents amb les noves. Si ho desmarqueu, només s\'haurà d\'executar per a un vídeo nou afegit.';
$lang['SYNC_OUTPUT'] = 'Format de sortida';
$lang['SYNC_OUTPUT_DESC'] = 'Seleccioneu el format de sortida per al pòster i la miniatura.';
$lang['SYNC_POSTEROVERLAY'] = 'Afegeix un efecte de pel·lícula';
$lang['SYNC_POSTEROVERLAY_DESC'] = 'Aplica una superposició a la creació de cartells.';

$lang['SYNC_THUMBSEC'] = 'Crea una miniatura cada segons';
$lang['SYNC_THUMBSEC_DESC'] = 'Crea una miniatura cada x segons.';
$lang['SYNC_THUMBSIZE'] = 'Mida de la miniatura';
$lang['SYNC_THUMBSIZE_DESC'] = 'xMida en píxels, guardeu una petita talla, aquella per defecte és correcta, Youtube utilitza 190x68';
$lang['SYNC_THUMBS_NEW'] = 'miniatura/es de VideoJS creada/es';
$lang['VIDEOS'] = 'vídeo(s) a la vostra galeria';
$lang['VIDEOS_GEOTAGGED'] = 'vídeo(s) amb geoetiqueta a la vostra galeria';
$lang['VIDEOS_THUMB'] = 'vídeo(s) amb pòster a la vostra galeria';
$lang['SYNC_REPRESENTATIVES'] = 'Adopta pòsters penjats manualment';
$lang['SYNC_REPRESENTATIVES_DESC'] = 'Per a cada vídeo, actualitza la informació relacionada amb el seu pòster.';
$lang['SYNC_REQUIRE'] = 'Requereix <a href="https://exiftool.org" target="_blank">ExifTool</a>, <a href="http://mediaarea.net/en/MediaInfo" target="_blank">MediaInfo </a> o <a href="http://www.ffmpeg.org" target="_blank">FFprobe</a>:';
$lang['SYNC_RESULTS'] = 'Resultats de la sincronització';
$lang['SYNC_THUMB'] = 'Miniatures de VideoJS';
$lang['SYNC_THUMBSIZE_ERROR'] = 'Mida de la miniatura no vàlida, tornem al valor per defecte de 120 px';
$lang['SYNC_THUMB_ERROR'] = 'FFmpeg no ha pogut generar les miniatures; comproveu els registres i proveu-ho manualment';
$lang['SYNC_WARNINGS_COUNT'] = 'avisos durant la sincronització';
$lang['VIDEO'] = 'Vídeo';
$lang['VIDEOJS_SETTINGS'] = 'Paràmetres de VideoJS';
$lang['VIDEOS_ALL'] = 'Tots els vídeos';
$lang['VIDEOS_METADATA_POSTERS'] = 'Metadades de vídeos i pòsters';
$lang['DIR_NOT_WRITABLE'] = 'directori sense accés d\'escriptura';
$lang['FILE_NOT_READABLE'] = 'fitxer il·legible';
$lang['INTRO_CONFIG'] = 'Aquest connector:';
$lang['INTRO_METADATA'] = 'extreu metadades amb <a href="https://exiftool.org" target="_blank">ExifTool</a>, <a href="http://mediaarea.net/en/MediaInfo" target="_blank" >MediaInfo</a> o <a href="http://www.ffmpeg.org" target="_blank">FFprobe</a> (si està disponible)';
$lang['INTRO_SUPPORT'] = 'Consulteu la <a href="https://github.com/xbgmsharp/piwigo-videojs/wiki" target="_blank">documentació del connector</a> per obtenir informació addicional i consulteu els <a href="https: //piwigo.org/forum/" target="_blank">fòrums</a> si trobeu cap problema.<br/>Per informar d\'errors i suggerir funcions noves, creeu un nou <a href="https://github.com/xbgmsharp/piwigo-videojs/issues" target="_blank">problema</a>.';
$lang['INTRO_THUMB'] = 'produeix miniatures amb <a href="http://www.ffmpeg.org" target="_blank">FFmpeg</a> (si està disponible)';
$lang['INTRO_VIDEOJS'] = 'afegeix el reproductor de vídeo HTML5 de codi obert <a href="http://www.videojs.com/" target="_blank">VideoJS</a>';
$lang['METADATA'] = 'Metadades';
$lang['METADATA_COUNT'] = 'Nombre d\'elements de metadades:';
$lang['METADATA_FILE'] = 'Mostra el fitxer:';
$lang['PLAYER'] = 'Reproductor';
$lang['PLAYER_TYPE'] = 'Tipus:';
$lang['POSTER'] = 'Pòster';
$lang['POSTER_ERROR'] = 'FFmpeg no ha pogut generar el pòster, comprovar els registres i provar-ho manualment';
$lang['STATS'] = 'Estadístiques';
$lang['SYNC_DATABASE'] = 'Metadades extretes de la base de dades';
$lang['SYNC_DELETE'] = 'Suprimeix les miniatures de VideoJS i les fonts de vídeo addicionals';
$lang['SYNC_DELETE_ASK'] = 'N\'esteu segur? Se suprimiran les fonts de vídeo addicionals i les miniatures de VideoJS.';
$lang['SYNC_DELETE_DESC'] = 'Útil per a vídeos que no inclouen metadades d\'orientació i que es mostren amb un reproductor VideoJS juntament amb el connector videojs-zoomrotate. El vídeo i el seu cartell romanen intactes. Només s\'actualitza el paràmetre d\'orientació emmagatzemat a la base de dades.';
$lang['SYNC_DETECTED'] = 'vídeo(s) detectat(s)';
$lang['SYNC_DURATION_ERROR'] = 'Durada desconeguda, no es pot crear el pòster';
$lang['SYNC_DURATION_SHORT'] = 'durada massa curta, s\'ha produït el cartell en un altre lloc';
$lang['SYNC_ERROR_COUNT'] = 'error(s) durant la sincornització';
$lang['SYNC_INTRO'] = 'Sincronització de metadades i creació de miniatures per als vídeos:';
$lang['SYNC_MEDIAINFO_ERROR'] = 'No es poden recuperar les metadades amb MediaInfo perquè falta la biblioteca XML';
$lang['SYNC_METADATA'] = 'Metadades';
$lang['SYNC_METADATA_ADDED'] = 'vídeo(s) amb metadades afegides';
$lang['SYNC_METADATA_ERROR'] = 'No es poden recuperar les metadades perquè ExifTool, FFprobe o MediaInfo no estan instal·lats o els seus camins d\'accés són incorrectes.';
$lang['SYNC_NONE'] = 'M\'heu demanat que no faci res!';
$lang['SYNC_POSTEROVERLAY_ERROR'] = 'Efecte de pel·lícula desactivat perquè falta la biblioteca GD.';
$lang['SYNC_POSTERS_NEW'] = 'cartell(s) adoptat(s) o creat(s)';
$lang['SYNC_POSTER_ERROR'] = 'S\'ha desactivat la creació de pòsters i miniatures perquè FFmpeg no està instal·lat o el seu camí d\'accés és incorrecte.';
$lang['SYNC_POSTER_REQUIRE'] = 'Requereix <a href="http://www.ffmpeg.org" target="_blank">FFmpeg</a>:';
$lang['SYNC_POSTER_TITLE'] = 'Pòsters per a la galeria fotogràfica';
$lang['VIDEOS_WO_POSTER'] = 'Tots els vídeos sense pòster';
$lang['VIDEOS_W_POSTER'] = 'Tots els vídeos amb pòster';
$lang['VIDEO_SRC'] = 'Fonts de vídeo';