<!DOCTYPE html>
<html lang="en">
<head>
	<title>Estimulos UANL</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=egde">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/flick/jquery-ui.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
	<header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a href="Index.html" class="navbar-brand">Convocatorias</a>
                    <a href="#" class="navbar-brand">Estimulos UANL</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-expanded="false" aria-label="Alternar Menu">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="menuNavegacion">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    PRODEP
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    SNI
                                </a>
                            </li>
                        </ul>
                        <form action="" class="form-inline my-2 my lg-0">
                            <input type="text" class="form-control mr-sm-2" type="search" placeholder="Buscar">
                            <button class="btn btn-primary my-2 my-sm-0" type="submit">Buscar</button>
                        </form>
                        <ul class="nav navbar-nav navbar-right">
        					<li><a href="#"><span class="glyphicon glyphicon-user m-3"></span>Salir</a></li>
      					</ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="container">
        	<div class="row mt-4">
        		<div class="col-12">
        			<div id="accordion">
                    <!--CARD#1-->
                        <div class="card border-0">
                            <div class="btn btn-dark" id="header1">
                                <a class="btn btn-block" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Docencia</a>
                            </div>
                            <div id="collapse1" class="collapse" aria-labelledby="header1" data-parent="#accordion">
                                <div class="card-body">
                                    <div id="subaccordion">
                                        <div class="card">
                                            <div class="btn btn-dark border-light" id="subheader1">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse1" aria-expanded="true" aria-controls="subcollapse1">Producción Académica Docencia</a>
                                            </div>
                                            <div id="subcollapse1" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    <form action="">
                                                        <div class="form-group">
                                                            <div class="row">
                                                                <div class="col-9">
                                                                    <h4>Producción Académica Docencia</h4> 
                                                                </div>
                                                                <div class="col-3">
                                                                    <select name="seleccion_produccion_academica" id="produccion_academica" class="right">
                                                                        <option value="seleccion">Seleccione...</option>
                                                                        <option value="articulo">Artículo</option>
                                                                        <option value="capitulo_libro">Capítulo del libro</option>
                                                                        <option value="libro">Libro</option>
                                                                        <option value="manual_operacion">Manual de operación</option>
                                                                        <option value="material_apoyo">Material de apoyo</option>
                                                                        <option value="material_didactico">Material didactico</option>
                                                                    </select>  
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    <div class="col-2">
                                                        <button class="btn btn-dark btn-lg" data-toggle="modal" data-target="#autor_est">Agregar</button>
                                                        <div class="modal fade" id="autor_est" tabindex="-1" role="dialog" aria-labelledby="autor_est">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title">Articulo nuevo</h4>
                                                                        <button class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <form>
                                                                        <div class="form-group">
                                                                          <label for="titulo_art">Título Articulo</label>
                                                                          <textarea class="form-control" id="titulo_art" rows="3"></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="estado_act">Estado Actual</label>
                                                                          <select id="estado_act" class="form-control">
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="aguascalientes">Aguascalientes</option>
                                                                            <option value="Baja California">Baja California</option>
                                                                            <option value="Baja California Sur">Baja California Sur</option>
                                                                            <option value="Campeche">Campeche</option>
                                                                            <option value="Chiapas">Chiapas</option>
                                                                            <option value="Chihuahua">Chihuahua</option>
                                                                            <option value="coahuila de Zaragoza">Coahuila de Zaragoza</option>
                                                                            <option value="Colima">Colima</option>
                                                                            <option value="Durango">Durango</option>
                                                                            <option value="Estado de México">Estado de México</option>
                                                                            <option value="Guanajuato">Guanajuato</option>
                                                                            <option value="Guerrero">Guerrero</option>
                                                                            <option value="Hidalgo">Hidalgo</option>
                                                                            <option value="Jalisco">Jalisco</option>
                                                                            <option value="Michoacán de Ocampo">Michoacán de Ocampo</option>
                                                                            <option value="Morelos">Morelos</option>
                                                                            <option value="Nayarit">Nayarit</option>
                                                                            <option value="Nuevo León">Nuevo León</option>
                                                                            <option value="Oaxaca">Oaxaca</option>
                                                                            <option value="Puebla">Puebla</option>
                                                                            <option value="Querétaro">Querétaro</option>
                                                                            <option value="Quintana Roo">Quintana Roo</option>
                                                                            <option value="San Luis Potosí">San Luis Potosí</option>
                                                                            <option value="Sinaloa">Sinaloa</option>
                                                                            <option value="Sonora">Sonora</option>
                                                                            <option value="Tabasco">Tabasco</option>
                                                                            <option value="Tamaulipas">Tamaulipas</option>
                                                                            <option value="Tlaxcala">Tlaxcala</option>
                                                                            <option value="Veracruz de Ignacio de la Llave">Veracruzde la Llave</option> 
                                                                            <option value="Yucatán">Yucatán</option>
                                                                            <option value="Zacatecas">Zacatecas</option>
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="estado_act">País</label>
                                                                          <select id="estado_act" class="form-control">
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="AF">Afganistán</option>
                                                                            <option value="AL">Albania</option>
                                                                            <option value="DE">Alemania</option>
                                                                            <option value="AD">Andorra</option>
                                                                            <option value="AO">Angola</option>
                                                                            <option value="AI">Anguilla</option>
                                                                            <option value="AQ">Antártida</option>
                                                                            <option value="AG">Antigua y Barbuda</option>
                                                                            <option value="AN">Antillas Holandesas</option>
                                                                            <option value="SA">Arabia Saudí</option>
                                                                            <option value="DZ">Argelia</option>
                                                                            <option value="AR">Argentina</option>
                                                                            <option value="AM">Armenia</option>
                                                                            <option value="AW">Aruba</option>
                                                                            <option value="AU">Australia</option>
                                                                            <option value="AT">Austria</option>
                                                                            <option value="AZ">Azerbaiyán</option>
                                                                            <option value="BS">Bahamas</option>
                                                                            <option value="BH">Bahrein</option>
                                                                            <option value="BD">Bangladesh</option>
                                                                            <option value="BB">Barbados</option>
                                                                            <option value="BE">Bélgica</option>
                                                                            <option value="BZ">Belice</option>
                                                                            <option value="BJ">Benin</option>
                                                                            <option value="BM">Bermudas</option>
                                                                            <option value="BY">Bielorrusia</option>
                                                                            <option value="MM">Birmania</option>
                                                                            <option value="BO">Bolivia</option>
                                                                            <option value="BA">Bosnia y Herzegovina</option>
                                                                            <option value="BW">Botswana</option>
                                                                            <option value="BR">Brasil</option>
                                                                            <option value="BN">Brunei</option>
                                                                            <option value="BG">Bulgaria</option>
                                                                            <option value="BF">Burkina Faso</option>
                                                                            <option value="BI">Burundi</option>
                                                                            <option value="BT">Bután</option>
                                                                            <option value="CV">Cabo Verde</option>
                                                                            <option value="KH">Camboya</option>
                                                                            <option value="CM">Camerún</option>
                                                                            <option value="CA">Canadá</option>
                                                                            <option value="TD">Chad</option>
                                                                            <option value="CL">Chile</option>
                                                                            <option value="CN">China</option>
                                                                            <option value="CY">Chipre</option>
                                                                            <option value="VA">Ciudad del Vaticano (Santa Sede)</option>
                                                                            <option value="CO">Colombia</option>
                                                                            <option value="KM">Comores</option>
                                                                            <option value="CG">Congo</option>
                                                                            <option value="CD">Congo, República Democrática del</option>
                                                                            <option value="KR">Corea</option>
                                                                            <option value="KP">Corea del Norte</option>
                                                                            <option value="CI">Costa de Marfíl</option>
                                                                            <option value="CR">Costa Rica</option>
                                                                            <option value="HR">Croacia (Hrvatska)</option>
                                                                            <option value="CU">Cuba</option>
                                                                            <option value="DK">Dinamarca</option>
                                                                            <option value="DJ">Djibouti</option>
                                                                            <option value="DM">Dominica</option>
                                                                            <option value="EC">Ecuador</option>
                                                                            <option value="EG">Egipto</option>
                                                                            <option value="SV">El Salvador</option>
                                                                            <option value="AE">Emiratos Árabes Unidos</option>
                                                                            <option value="ER">Eritrea</option>
                                                                            <option value="SI">Eslovenia</option>
                                                                            <option value="ES" selected>España</option>
                                                                            <option value="US">Estados Unidos</option>
                                                                            <option value="EE">Estonia</option>
                                                                            <option value="ET">Etiopía</option>
                                                                            <option value="FJ">Fiji</option>
                                                                            <option value="PH">Filipinas</option>
                                                                            <option value="FI">Finlandia</option>
                                                                            <option value="FR">Francia</option>
                                                                            <option value="GA">Gabón</option>
                                                                            <option value="GM">Gambia</option>
                                                                            <option value="GE">Georgia</option>
                                                                            <option value="GH">Ghana</option>
                                                                            <option value="GI">Gibraltar</option>
                                                                            <option value="GD">Granada</option>
                                                                            <option value="GR">Grecia</option>
                                                                            <option value="GL">Groenlandia</option>
                                                                            <option value="GP">Guadalupe</option>
                                                                            <option value="GU">Guam</option>
                                                                            <option value="GT">Guatemala</option>
                                                                            <option value="GY">Guayana</option>
                                                                            <option value="GF">Guayana Francesa</option>
                                                                            <option value="GN">Guinea</option>
                                                                            <option value="GQ">Guinea Ecuatorial</option>
                                                                            <option value="GW">Guinea-Bissau</option>
                                                                            <option value="HT">Haití</option>
                                                                            <option value="HN">Honduras</option>
                                                                            <option value="HU">Hungría</option>
                                                                            <option value="IN">India</option>
                                                                            <option value="ID">Indonesia</option>
                                                                            <option value="IQ">Irak</option>
                                                                            <option value="IR">Irán</option>
                                                                            <option value="IE">Irlanda</option>
                                                                            <option value="BV">Isla Bouvet</option>
                                                                            <option value="CX">Isla de Christmas</option>
                                                                            <option value="IS">Islandia</option>
                                                                            <option value="KY">Islas Caimán</option>
                                                                            <option value="CK">Islas Cook</option>
                                                                            <option value="CC">Islas de Cocos o Keeling</option>
                                                                            <option value="FO">Islas Faroe</option>
                                                                            <option value="HM">Islas Heard y McDonald</option>
                                                                            <option value="FK">Islas Malvinas</option>
                                                                            <option value="MP">Islas Marianas del Norte</option>
                                                                            <option value="MH">Islas Marshall</option>
                                                                            <option value="UM">Islas menores de Estados Unidos</option>
                                                                            <option value="PW">Islas Palau</option>
                                                                            <option value="SB">Islas Salomón</option>
                                                                            <option value="SJ">Islas Svalbard y Jan Mayen</option>
                                                                            <option value="TK">Islas Tokelau</option>
                                                                            <option value="TC">Islas Turks y Caicos</option>
                                                                            <option value="VI">Islas Vírgenes (EEUU)</option>
                                                                            <option value="VG">Islas Vírgenes (Reino Unido)</option>
                                                                            <option value="WF">Islas Wallis y Futuna</option>
                                                                            <option value="IL">Israel</option>
                                                                            <option value="IT">Italia</option>
                                                                            <option value="JM">Jamaica</option>
                                                                            <option value="JP">Japón</option>
                                                                            <option value="JO">Jordania</option>
                                                                            <option value="KZ">Kazajistán</option>
                                                                            <option value="KE">Kenia</option>
                                                                            <option value="KG">Kirguizistán</option>
                                                                            <option value="KI">Kiribati</option>
                                                                            <option value="KW">Kuwait</option>
                                                                            <option value="LA">Laos</option>
                                                                            <option value="LS">Lesotho</option>
                                                                            <option value="LV">Letonia</option>
                                                                            <option value="LB">Líbano</option>
                                                                            <option value="LR">Liberia</option>
                                                                            <option value="LY">Libia</option>
                                                                            <option value="LI">Liechtenstein</option>
                                                                            <option value="LT">Lituania</option>
                                                                            <option value="LU">Luxemburgo</option>
                                                                            <option value="MK">Macedonia, Ex-República Yugoslava de</option>
                                                                            <option value="MG">Madagascar</option>
                                                                            <option value="MY">Malasia</option>
                                                                            <option value="MW">Malawi</option>
                                                                            <option value="MV">Maldivas</option>
                                                                            <option value="ML">Malí</option>
                                                                            <option value="MT">Malta</option>
                                                                            <option value="MA">Marruecos</option>
                                                                            <option value="MQ">Martinica</option>
                                                                            <option value="MU">Mauricio</option>
                                                                            <option value="MR">Mauritania</option>
                                                                            <option value="YT">Mayotte</option>
                                                                            <option value="MX">México</option>
                                                                            <option value="FM">Micronesia</option>
                                                                            <option value="MD">Moldavia</option>
                                                                            <option value="MC">Mónaco</option>
                                                                            <option value="MN">Mongolia</option>
                                                                            <option value="MS">Montserrat</option>
                                                                            <option value="MZ">Mozambique</option>
                                                                            <option value="NA">Namibia</option>
                                                                            <option value="NR">Nauru</option>
                                                                            <option value="NP">Nepal</option>
                                                                            <option value="NI">Nicaragua</option>
                                                                            <option value="NE">Níger</option>
                                                                            <option value="NG">Nigeria</option>
                                                                            <option value="NU">Niue</option>
                                                                            <option value="NF">Norfolk</option>
                                                                            <option value="NO">Noruega</option>
                                                                            <option value="NC">Nueva Caledonia</option>
                                                                            <option value="NZ">Nueva Zelanda</option>
                                                                            <option value="OM">Omán</option>
                                                                            <option value="NL">Países Bajos</option>
                                                                            <option value="PA">Panamá</option>
                                                                            <option value="PG">Papúa Nueva Guinea</option>
                                                                            <option value="PK">Paquistán</option>
                                                                            <option value="PY">Paraguay</option>
                                                                            <option value="PE">Perú</option>
                                                                            <option value="PN">Pitcairn</option>
                                                                            <option value="PF">Polinesia Francesa</option>
                                                                            <option value="PL">Polonia</option>
                                                                            <option value="PT">Portugal</option>
                                                                            <option value="PR">Puerto Rico</option>
                                                                            <option value="QA">Qatar</option>
                                                                            <option value="UK">Reino Unido</option>
                                                                            <option value="CF">República Centroafricana</option>
                                                                            <option value="CZ">República Checa</option>
                                                                            <option value="ZA">República de Sudáfrica</option>
                                                                            <option value="DO">República Dominicana</option>
                                                                            <option value="SK">República Eslovaca</option>
                                                                            <option value="RE">Reunión</option>
                                                                            <option value="RW">Ruanda</option>
                                                                            <option value="RO">Rumania</option>
                                                                            <option value="RU">Rusia</option>
                                                                            <option value="EH">Sahara Occidental</option>
                                                                            <option value="KN">Saint Kitts y Nevis</option>
                                                                            <option value="WS">Samoa</option>
                                                                            <option value="AS">Samoa Americana</option>
                                                                            <option value="SM">San Marino</option>
                                                                            <option value="VC">San Vicente y Granadinas</option>
                                                                            <option value="SH">Santa Helena</option>
                                                                            <option value="LC">Santa Lucía</option>
                                                                            <option value="ST">Santo Tomé y Príncipe</option>
                                                                            <option value="SN">Senegal</option>
                                                                            <option value="SC">Seychelles</option>
                                                                            <option value="SL">Sierra Leona</option>
                                                                            <option value="SG">Singapur</option>
                                                                            <option value="SY">Siria</option>
                                                                            <option value="SO">Somalia</option>
                                                                            <option value="LK">Sri Lanka</option>
                                                                            <option value="PM">St Pierre y Miquelon</option>
                                                                            <option value="SZ">Suazilandia</option>
                                                                            <option value="SD">Sudán</option>
                                                                            <option value="SE">Suecia</option>
                                                                            <option value="CH">Suiza</option>
                                                                            <option value="SR">Surinam</option>
                                                                            <option value="TH">Tailandia</option>
                                                                            <option value="TW">Taiwán</option>
                                                                            <option value="TZ">Tanzania</option>
                                                                            <option value="TJ">Tayikistán</option>
                                                                            <option value="TF">Territorios franceses del Sur</option>
                                                                            <option value="TP">Timor Oriental</option>
                                                                            <option value="TG">Togo</option>
                                                                            <option value="TO">Tonga</option>
                                                                            <option value="TT">Trinidad y Tobago</option>
                                                                            <option value="TN">Túnez</option>
                                                                            <option value="TM">Turkmenistán</option>
                                                                            <option value="TR">Turquía</option>
                                                                            <option value="TV">Tuvalu</option>
                                                                            <option value="UA">Ucrania</option>
                                                                            <option value="UG">Uganda</option>
                                                                            <option value="UY">Uruguay</option>
                                                                            <option value="UZ">Uzbekistán</option>
                                                                            <option value="VU">Vanuatu</option>
                                                                            <option value="VE">Venezuela</option>
                                                                            <option value="VN">Vietnam</option>
                                                                            <option value="YE">Yemen</option>
                                                                            <option value="YU">Yugoslavia</option>
                                                                            <option value="ZM">Zambia</option>
                                                                            <option value="ZW">Zimbabue</option>
                                                                          </select>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="nom_rev">Nombre de la revista</label>
                                                                          <textarea class="form-control" id="nom_rev" rows="3"></textarea>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                          <label for="pag_ini" class="col-sm-2 col-form-label">Página inicial</label>
                                                                          <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="pag_ini" placeholder="0">
                                                                          </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                          <label for="pag_fin" class="col-sm-2 col-form-label">Página final</label>
                                                                          <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="pag_fin" placeholder="0">
                                                                          </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="editorial">Editorial</label>
                                                                          <textarea class="form-control" id="editorial" rows="3"></textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="issn">ISSN</label>
                                                                          <input type="text" class="form-control" id="issn">
                                                                        </div>
                                                                        <div class="form-group">
                                                                          <label for="volum">Volumen</label>
                                                                          <input type="text" class="form-control" id="volum">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="datepicker" class="control-label">Fecha</label>
                                                                            <div class="controls">
                                                                                <input type="text" id="fecha" class="tuiker form-control">
                                                                                <label for="datepicker" class="input-group-addon generic_btn"><i class="fa fa-calendar" aria-hidden="true"></i></label>    
                                                                            </div>
                                                                        </div>
                                                                        <fieldset class="form-group">
                                                                        <div class="row">
                                                                            <legend class="col-form-label col-8">Considera para C.V. de C.A.</legend>
                                                                                <div class="col-sm-10">
                                                                                    <div class="form-check col-2">
                                                                                        <input class="form-check-input" type="radio" name="no" id="gridRadios1" value="option1" checked>
                                                                                        <label class="form-check-label" for="gridRadios1">Sí</label>
                                                                                    </div>
                                                                                    <div class="form-check col-2">
                                                                                        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                                                                                        <label class="form-check-label" for="gridRadios2">No</label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </fieldset>
                                                                        <div class="form-group">
                                                                          <label for="proposito">Proposito</label>
                                                                          <select id="proposito" class="form-control">
                                                                            <option selected>Seleccione...</option>
                                                                            <option value="gene_cono">Generador de conocimiento</option>
                                                                          </select>
                                                                        </div>
                                                                    </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <table class="table table-dark m-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Titulo del articulo</th>
                                                                <th>ISSN</th>
                                                                <th>Fecha de publicación</th>
                                                                <th>Editorial</th>
                                                                <th>Nombre de la revista</th>
                                                            </tr>
                                                        </thead>
                                                    </table>
                                                    <br><br><br><br>
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-light" id="subheader2">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse2" aria-expanded="true" aria-controls="subcollapse2">Capacitación y Actualización Académica</a>
                                            </div>
                                            <div id="subcollapse2" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-light" id="subheader3">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse3" aria-expanded="true" aria-controls="subcollapse3">Capacitación y Actualización en Lenguas Extranjeras</a>
                                            </div>
                                            <div id="subcollapse3" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-white" id="subheader4">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse4" aria-expanded="true" aria-controls="subcollapse4">Gestión Académica Invididualizada</a>
                                            </div>
                                            <div id="subcollapse4" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-light" id="subheader5">
                                                <a class="btn btn-block" data-toggle="collapse" data-target="#subcollapse5" aria-expanded="true" aria-controls="subcollapse5">Impartición de Cursos a Profesores y Trabajadores de la UANL</a>
                                            </div>
                                            <div id="subcollapse5" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                            <div class="btn btn-dark border-light" id="subheader6">
                                                <a class="btn btn-block border-dark" data-toggle="collapse" data-target="#subcollapse6" aria-expanded="true" aria-controls="subcollapse6">Premios y Distinciones</a>
                                            </div>
                                            <div id="subcollapse6" class="collapse" aria-labelledby="subheader1" data-parent="#subaccordion">
                                                <div class="card-body">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>   
                    </div>
        		</div>
        	</div>
        </div>
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/popper.min.js"></script>
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.tuiker').datepicker({
            //adecuando formato de fecha
            dateFormat: "dd/mm/yy",
            //primer dia sea lunes
            firstDay: 1,
            //Nombres de los dias
            dayNames: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
            //Abreviatura de los dias largos
            dayNamesMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
            //Escribir los meses
            monthNames: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
            //Abreviatura de los meses
            monthNamesShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
            onSelect: function(dateText){
                $('#fecha').val(dateText);
            }
        });
    </script>
</body>
</html>