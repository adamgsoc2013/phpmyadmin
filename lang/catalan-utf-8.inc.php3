<?php
/* $Id$ */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');
$timespanfmt = '%s dies, %s hores, %s minuts i %s segons';

$day_of_week = array('Diu', 'Dll', 'Dma', 'Dcr', 'Djs', 'Div', 'Dis');
$month = array('Gen', 'Feb', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Oct', 'Nov', 'Dec');
// Veure http://www.php.net/manual/es/function.strftime.php per a definir
// la variable seguent
$datefmt = '%d-%m-%Y a les %H:%M:%S';

$strAbortedClients = 'Avortat';
$strAccessDenied = 'Accés denegat';
$strAction = 'Acció';
$strAddDeleteColumn = 'Afegir/esborrar Camps de Columna';
$strAddDeleteRow = 'Afegir/esborrar fila de criteri';
$strAddNewField = 'Afegir un camp nou';
$strAddPriv = 'Afegir un privilegi nou';
$strAddPrivMessage = 'Has afegit un privilegi nou.';
$strAddSearchConditions = 'Afegeix condicions de recerca (cos de la clàusula "where"):';
$strAddToIndex = 'Afegir columna(es) a l\'índex %s&nbsp;';
$strAddUser = 'Afegir un usuari nou';
$strAddUserMessage = 'Has afegit un usuari nou.';
$strAffectedRows = 'Files afectades:';
$strAfter = 'Després %s';
$strAfterInsertBack = 'Tornar';
$strAfterInsertNewInsert = 'Inserta un nou registre';
$strAll = 'Tot';
$strAllTableSameWidth = 'Mostrar totes les taules amb la mateixa amplada?';
$strAlterOrderBy = 'Altera la taula i ordena per';
$strAnIndex = 'S\'ha afegit un índex a %s';
$strAnalyzeTable = 'Analitza la taula';
$strAnd = 'I';
$strAny = 'Qualsevol';
$strAnyColumn = 'Qualsevol columna';
$strAnyDatabase = 'Qualsevol base de dades';
$strAnyHost = 'Qualsevol servidor';
$strAnyTable = 'Qualsevol taula';
$strAnyUser = 'Qualsevol usuari';
$strAPrimaryKey = 'S\'ha afegit una clau primària a %s';
$strAscending = 'Ascendent';
$strAtBeginningOfTable = 'Al principi de la taula';
$strAtEndOfTable = 'Al final de la taula';
$strAttr = 'Atributs';

$strBack = 'Enrere';
$strBeginCut = 'INICI DEL TALL';
$strBeginRaw = 'INICI DEL VOLCAT';
$strBinary = ' Binari ';
$strBinaryDoNotEdit = ' Binari - no editeu ';
$strBookmarkDeleted = 'S\'ha esborrat el bookmark.';
$strBookmarkLabel = 'Etiqueta';
$strBookmarkQuery = 'Consulta SQL registrada';
$strBookmarkThis = 'Registra aquesta consulta SQL';
$strBookmarkView = 'Només mirar';
$strBrowse = 'Navega';
$strBzError = 'phpMyAdmin és incapaç de comprimir el volcat degut a una extensió Bz2 incorrecta en aquesta versió de php. És molt recomenable posar a la directiva <code>$cfg[\'BZipDump\']</code> el valor <code>FALSE</code> al fitxer de configuració de phpMyAdmin. Si vol utilitzar les facilitats de compresió Bz2, és necessari actualitzar el php a la darrera versió disponible. Es pot consultar el informe d\'errada %s de php per a més detalls.';
$strBzip = '"comprimit amb bzip"';

$strCannotLogin = 'No podem connectar al servidor MySQL';
$strCantLoadMySQL = 'no s\'ha pogut carregar l\'extensió de MySQL,<br />verifiqueu la configuració del PHP.';
$strCantLoadRecodeIconv = 'No es pot carregar iconv o recodificar una extensió necessària per la conversió de jocs de caràcters, configura php per permetre l\'ús d\'aquestes extensions o bé desactiva la conversió de jocs de caràcters en phpMyAdmin.';
$strCantRenameIdxToPrimary = 'No pots canviar el nom d\'un índex a "PRIMARY"!';
$strCantUseRecodeIconv = 'No es pot utilitzar iconv ni libiconv ni la funció recode_string mentre es carrega l\'extensió d\'informes. Comprova la configuració de php.';
$strCardinality = 'Cardinalitat';
$strCarriage = 'Retorn de línia: \\r';
$strChange = 'Canvi';
$strChangeDisplay = 'Tria el camp a mostrar';
$strChangePassword = 'Canvi de contrasenya';
$strCharsetOfFile = 'Joc de caràcters de l\'arxiu:';
$strCheckAll = 'Verificar-ho tot';
$strCheckDbPriv = 'Verifica els privilegis de la base de dades';
$strCheckTable = 'Verifica la taula';
$strChoosePage = 'Tria una pàgina per editar';
$strColComFeat = 'Mostrant comentaris de les columnes';
$strColumn = 'Columna';
$strColumnNames = 'Nom de les columnes';
$strCommand = 'Ordre';
$strComments = 'Comentaris';
$strCompleteInserts = 'Completar insercions';
$strCompression = 'Compressió';
$strConfigFileError = 'phpMyAdmin és incapaç de llegir el fitxer de configuració!<br />Això pot succeir si php troba un error sintàctic en ell o bé php no pot trobar el fitxer.<br />Intenta obrir el fitxer de configuració directament fent servir l\'enllaç següent i comprova el(s) missatge(s) d\'error que reps. En moltes ocasions una coma o punt i coma falta en algun lloc.<br />Si reps una plana en blanc, tot està bé.';
$strConfigureTableCoord = 'Configura les coordenades per la taula %s';
$strConfirm = 'Ho vols fer realment?';
$strConnections = 'Conexions';
$strCookiesRequired = 'A partir d\'aquest punt és necessari tenir les Cookies activades.';
$strCopyTable = 'Copia taula a (basedades<b>.</b>taula):';
$strCopyTableOK = 'La taula %s ha estat copiada a %s.';
$strCouldNotKill = 'phpMyAdmin no pot cancel.lar el fil %s. Probablement, ja és tancat.';
$strCreate = 'Crear';
$strCreateIndex = 'Crea un índex a la columna:&nbsp;%s';
$strCreateIndexTopic = 'Crea un nou índex';
$strCreateNewDatabase = 'Crea una nova base de dades';
$strCreateNewTable = 'Crear una taula nova a la base de dades %s';
$strCreatePage = 'Crea una nova Pàgina';
$strCreatePdfFeat = 'Creació de PDFs';
$strCriteria = 'Criteris';

$strData = 'Dades';
$strDatabase = 'Base de dades ';
$strDatabaseHasBeenDropped = 'La Base de Dades %s s\'ha eliminat.';
$strDatabaseWildcard = 'Bases de Dades (es permeten comodins):';
$strDatabases = 'bases de dades';
$strDatabasesStats = 'Estadístiques de les bases de dades';
$strDataDict = 'Diccionari de Dades';
$strDataOnly = 'Només dades';
$strDefault = 'Defecte';
$strDelete = 'Esborrar';
$strDeleteFailed = 'No s\'ha pogut esborrar!';
$strDeleteUserMessage = 'Has esborrat l\'usuari %s.';
$strDeleted = 'La fila ha estat esborrada';
$strDeletedRows = 'Files esborrades:';
$strDescending = 'Descendent';
$strDisabled = 'Desactivat';
$strDisplay = 'Mostrar';
$strDisplayFeat = 'Mostrar característiques';
$strDisplayOrder = 'Ordre del llistat:';
$strDisplayPDF = 'Mostrar esquema PDF';
$strDoAQuery = 'Fer una "petició segons exemple" (comodí: "%")';
$strDoYouReally = 'Realment vols';
$strDocu = 'Documentació';
$strDrop = 'Eliminar';
$strDropDB = 'Eliminar base de dades %s';
$strDropTable = 'Esborrar taula';
$strDumpXRows = 'Volcar %s files començant a la fila %s.';
$strDumpingData = 'Volcant dades de la taula';
$strDynamic = 'dinàmic';

$strEdit = 'Editar';
$strEditPDFPages = 'Editar pàgines PDF';
$strEditPrivileges = 'Editar privilegis';
$strEffective = 'Efectiu';
$strEmpty = 'Buidar';
$strEmptyResultSet = 'MySQL ha retornat un conjunt buit (p.e. cap fila).';
$strEnabled = 'Activat';
$strEnd = 'Final';
$strEndCut = 'FI DEL TALL';
$strEndRaw = 'FI DEL VOLCAT';
$strEnglishPrivileges = ' Nota: Els noms dels privilegis del MySQL són en llengua anglesa ';
$strError = 'Errada';
$strExplain = 'Explicació de l\'SQL';
$strExport = 'Exportar';
$strExportToXML = 'Exportar a format XML';
$strExtendedInserts = 'Insercions ampliades';
$strExtra = 'Extra';

$strFailedAttempts = 'Intents erronis';
$strField = 'Camp';
$strFieldHasBeenDropped = 'S\'ha esborrat el camp %s';
$strFields = 'Camps';
$strFieldsEmpty = ' El comptador de camps és buit! ';
$strFieldsEnclosedBy = 'Camps englobats per';
$strFieldsEscapedBy = 'Camps amb marca d\'escapada';
$strFieldsTerminatedBy = 'Camps acabats per';
$strFixed = 'fixa';
$strFlushTable = 'Buidar el caché de la taula ("FLUSH")';
$strFormEmpty = 'Falta un valor al formulari !';
$strFormat = 'Format';
$strFullText = 'Textos sencers';
$strFunction = 'Funció';

$strGenBy = 'Generat per';
$strGenTime = 'Temps de generació';
$strGeneralRelationFeat = 'Característiques generals de relacions';
$strGlobalValue = 'Valor global';
$strGo = 'Executar';
$strGrants = 'Atorgar';
$strGzip = '"comprimit amb gzip"';

$strHasBeenAltered = 'ha estat alterada.';
$strHasBeenCreated = 'ha estat creada.';
$strHaveToShow = 'Has d\'escollir al menys una columna per mostrar';
$strHome = 'Inici';
$strHomepageOfficial = 'Plana oficial del phpMyAdmin';
$strHomepageSourceforge = 'Plana de descàrrega del phpMyAdmin a SourceForge';
$strHost = 'Servidor';
$strHostEmpty = 'El nom del servidor és buit!';

$strId = 'ID';
$strIdxFulltext = 'Text sencer';
$strIfYouWish = 'Si només vols carregar algunes columnes de la taula, especifica-ho amb una llista separada per comes.';
$strIgnore = 'Ignora';
$strImportDocSQL = 'Importa Arxius docSQL';
$strInUse = 'en ús';
$strIndex = 'Índex';
$strIndexHasBeenDropped = 'S\'ha esborrat l\'índex %s';
$strIndexName = 'Nom d\'índex:';
$strIndexType = 'Tipus d\'índex:';
$strIndexes = 'Indexos';
$strInsecureMySQL = 'El vostre fitxer de configuració té paràmetres (root sense contrasenya) que corresponen al compte privilegiat predetermitat de MySQL. El servidor MySQL està funcionant amb aquests valors, el que significa un forat de seguretat, i s\'exposa a intrusions, pel que recomanem la reparació urgent d\'aquest forat de seguretat.';
$strInsert = 'Inserta';
$strInsertAsNewRow = 'Inserir com a nova fila';
$strInsertNewRow = 'Inserir nova fila';
$strInsertTextfiles = 'Inserir fitxers de text a la taula';
$strInsertedRows = 'Files Inserides:';
$strInstructions = 'Instruccions';
$strInvalidName = '"%s" és una paraula reservada, no es pot fer servir com a nom de base de dades/taula/camp.';

$strKeepPass = 'No canviïs la contrasenya';
$strKeyname = 'Nom Clau';
$strKill = 'Finalitzar';

$strLandscape = 'Horitzontal';
$strLength = 'Longitud';
$strLengthSet = 'Longitud/Valors*';
$strLimitNumRows = 'registres per plana';
$strLineFeed = 'Salt de línia: \\n';
$strLines = 'Línies';
$strLinesTerminatedBy = 'Línies terminades per';
$strLinkNotFound = 'L\'enllaç no s\'ha trobat';
$strLinksTo = 'Enllaços a';
$strLocationTextfile = 'Ubicació del fitxer de text';
$strLogPassword = 'Contrasenya:';
$strLogUsername = 'Nom d\'Usuari:';
$strLogin = 'Identificació';
$strLogout = 'Sortir';

$strMissingBracket = 'Falta una clau (\{ o bé \})';
$strModifications = 'Les modificacions han estat guardades';
$strModify = 'Modificar';
$strModifyIndexTopic = 'Modifica un índex';
$strMoreStatusVars = 'Més  variables d\'estat';
$strMoveTable = 'Mou taula a (base dades<b>.</b>taula):';
$strMoveTableOK = 'Taula %s moguda a %s.';
$strMySQLCharset = 'Joc de caràcters de MySQL';
$strMySQLReloaded = 'MySQL reiniciat.';
$strMySQLSaid = 'MySQL diu: ';
$strMySQLServerProcess = 'MySQL %pma_s1% executant-se a %pma_s2% com a %pma_s3%';
$strMySQLShowProcess = 'Mostrar processos';
$strMySQLShowStatus = 'Mostra la informació de funcionament del MySQL';
$strMySQLShowVars = 'Mostra les variables de sistema del MySQL';

$strName = 'Nom';
$strNext = 'Següent';
$strNo = 'No';
$strNoDatabases = 'No hi ha Bases de Dades';
$strNoDescription = 'Sense Descripció';
$strNoDropDatabases = 'Instrucció "DROP DATABASE" desactivada.';
$strNoExplain = 'Saltar l\'explicació de l\'SQL';
$strNoFrames = 'phpMyAdmin és més fàcil amb un navegador que <b>suporti marcs (frames)</b>.';
$strNoIndex = 'No s\'ha definit l\'índex!';
$strNoIndexPartsDefined = 'No s\'han definit parts de l\'índex!';
$strNoModification = 'Sense canvis';
$strNoPassword = 'Sense contrasenya';
$strNoPhp = 'Sense codi PHP';
$strNoPrivileges = 'Sense privilegis';
$strNoQuery = 'No és una consulta SQL!';
$strNoRights = 'No tens prou privilegis per visualitzar aquesta informació!';
$strNoTablesFound = 'Base de dades sense taules.';
$strNoUsersFound = 'No s\'han trobat usuaris.';
$strNoValidateSQL = 'Saltar la Validació de l\'SQL';
$strNone = 'Res';
$strNotNumber = 'Aquest valor no és un número!';
$strNotOK = 'Incorrecte';
$strNotSet = 'Taula <b>%s</b> no trobada o no definida a %s';
$strNotValidNumber = ' no es un número de columna vàlid!';
$strNull = 'Nul';
$strNumSearchResultsInTable = '%s resultat(s) a la taula <i>%s</i>';
$strNumSearchResultsTotal = '<b>Total:</b> <i>%s</i> resultat(s)';
$strNumTables = 'Taules';

$strOK = 'Correcte';
$strOftenQuotation = 'Marques sintàctiques. OPCIONALMENT vol dir que només els camps de tipus char i varchar van "tancats dins" "-aquest caràcter.';
$strOperations = 'Operacions';
$strOptimizeTable = 'Optimitza la taula';
$strOptionalControls = 'Opcional. Controla com llegir o escriure caràcters especials.';
$strOptionally = 'OPCIONALMENT';
$strOptions = 'Opcions';
$strOr = 'O';
$strOverhead = 'Defragmentat';

$strPageNumber = 'Número de pàgina:';
$strPartialText = 'Textos Parcials';
$strPassword = 'Contrasenya';
$strPasswordEmpty = 'La contrasenya és buida!';
$strPasswordNotSame = 'Les contrasenyes no coincideixen!';
$strPdfDbSchema = 'Esquema de la base de dades "%s" - Pàgina %s';
$strPdfInvalidPageNum = 'Número de pàgina PDF no definida!';
$strPdfInvalidTblName = 'La taula "%s" no existeix!';
$strPdfNoTables = 'No hi ha taules';
$strPerHour = 'per hora';
$strPhp = 'Crear codi PHP';
$strPHP40203 = 'S\'esta fent servir la versió 4.2.3 de PHP, que té un serios error amb cadenes de multi-byte (mbstring). Mira l\'informe d\'error 19404 de PHP. No es recomana aquesta versió de PHP per treballar amb phpMyAdmin.';
$strPHPVersion = 'PHP versió';
$strPmaDocumentation = 'Documentació de phpMyAdmin';
$strPmaUriError = 'La directiva <tt>$cfg[\'PmaAbsoluteUri\']</tt> HA d\'estar al fitxer de configuració!';
$strPortrait = 'Vertical';
$strPos1 = 'Inici';
$strPrevious = 'Anterior';
$strPrimary = 'Primària';
$strPrimaryKey = 'Clau Primària';
$strPrimaryKeyHasBeenDropped = 'S\'ha esborrat la clau principal';
$strPrimaryKeyName = 'El nom de la clau principal ha de ser ... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>ha de ser</b> el nom i <b>només</b>el nom de la clau principal!)';
$strPrint = 'Imprimir';
$strPrintView = 'Imprimir vista';
$strPrivileges = 'Privilegis';
$strProcesslist = 'Llista de processos';
$strProperties = 'Propietats';
$strPutColNames = 'Posa els noms de camp a la primera fila';

$strQBE = 'Consulta segons exemple';
$strQBEDel = 'Sup';
$strQBEIns = 'Ins';
$strQueryOnDb = 'Consulta SQL a la base de dades <b>%s</b>:';
$strQueryStatistics = '<b>Estadístiques de Consultes</b>: Des de l\'últim inici, s\'han enviat %s consultes al servidor.';
$strQueryType = 'Tipus de consulta';

$strReceived = 'Rebut';
$strRecords = 'Registres';
$strReferentialIntegrity = 'Comprova la integritat referencial:';
$strRelationalSchema = 'Esquema Relacional';
$strRelationNotWorking = 'Les característiques addicionals per treballar amb taules enllaçades s\'han desactivat. Per saber perquè clica %saquí%s.';
$strRelationView = 'Vista de Relacions';
$strReloadFailed = 'El reinici del MySQL ha fallat';
$strReloadMySQL = 'Rellegir el MySQL';
$strRememberReload = 'Recorda reiniciar el MySQL';
$strRenameTable = 'Renombrar les taules a';
$strRenameTableOK = 'La taula %s ha canviat de nom. Ara es diu %s';
$strRepairTable = 'Reparar taula';
$strReplace = 'Substituir';
$strReplaceTable = 'Substituir les dades de la taula pel fitxer ';
$strReset = 'Esborrar';
$strReType = 'Reescriure';
$strRevoke = 'Revocar';
$strRevokeGrant = 'Revocar garantia';
$strRevokeGrantMessage = 'Has revocat la garantia de privilegis per a %s';
$strRevokeMessage = 'Has revocat els privilegis per %s';
$strRevokePriv = 'Revocar privilegis';
$strRowLength = 'Longitud de fila';
$strRowSize = 'Mida de fila ';
$strRows = 'Fila';
$strRowsFrom = 'Files començant des de';
$strRowsModeHorizontal = 'horitzontal';
$strRowsModeOptions = ' en mode %s i repeteix capçaleres després de %s cel·les ';
$strRowsModeVertical = 'vertical';
$strRowsStatistic = 'Estadística de files';
$strRunQuery = 'Executa consulta';
$strRunSQLQuery = 'Executa consulta/s SQL a la Base de Dades %s';
$strRunning = 'funcionant a %s';

$strSQL = 'SQL';
$strSQLParserBugMessage = 'És possible que hagueu trobat un error a l\'intèrpret SQL. Si us plau, comproveu la sintaxi de la consulta i verifiqueu que les cometes estiguin al seu lloc i facin parelles. Un altra possible causa de l\'errada és que estigueu pujant un arxiu amb dades binàries per fora de l\'àrea de text delimitada. També podeu provar la consulta a la interfície de comandes de MySQL. La sortida següent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema. Si encara teniu problemes o si l\'intèrpret falla i l\'interfície de comandes funciona, reduïu la consulta a la part de l\'SQL que produeix l\'errada, i envieu un informe d\'error amb la cadena de dades de la secció de TALL indicada avall:';
$strSQLParserUserError = 'Sembla que hi ha un error a la consulta SQL. La sortida següent generada pel servidor MySQL, si n\'hi ha, pot ajudar-vos a diagnosticar el problema';
$strSQLQuery = 'crida SQL';
$strSQLResult = 'Resultat SQL';
$strSQPBugInvalidIdentifer = 'Identificador Incorrecte';
$strSQPBugUnclosedQuote = 'Cometes sense tancar';
$strSQPBugUnknownPunctuation = 'Signe de puntuació desconegut';
$strSave = 'Guardar';
$strScaleFactorSmall = 'El factor de l\'escala és massa petit per posar l\'esquema en una pàgina';
$strSearch = 'Cercar';
$strSearchFormTitle = 'Cercar a la base de dades';
$strSearchInTables = 'A la(les) taula(es):';
$strSearchNeedle = 'Paraula(es) o valor(s) a cercar (comodí: "%"):';
$strSearchOption1 = 'al menys una d\'aquestes paraules';
$strSearchOption2 = 'Totes les paraules';
$strSearchOption3 = 'La frase exacta';
$strSearchOption4 = 'com a expressió regular';
$strSearchResultsFor = 'Resultats de la recerca per a "<i>%s</i>" %s:';
$strSearchType = 'Trobat:';
$strSelect = 'Selecciona';
$strSelectADb = 'Selecciona una Base de Dades';
$strSelectAll = 'Selecciona Tot';
$strSelectFields = 'Selecciona els camps (un com a mínim):';
$strSelectNumRows = 'en consulta';
$strSelectTables = 'Selecciona Taules';
$strSend = 'enviar';
$strSent = 'Enviat';
$strServer = 'Servidor %s';
$strServerChoice = 'Elecció de Servidor';
$strServerStatus = 'Informació d\'execució';
$strServerStatusUptime = 'Aquest servidor MySQL és en marxa durant %s. Es va iniciar en %s.';
$strServerTabVariables = 'Variables';
$strServerTabProcesslist = 'Processos';
$strServerTrafficNotes = '<b>Ocupació de servidor</b>: Aquestes taules mostren la ocupació de la xarxa d\'aquest servidor MySQL des de l\'últim inici.';
$strServerVars = 'Variables i settings del servidor';
$strServerVersion = 'Versió del servidor';
$strSessionValue = 'Valor de sessió';
$strSetEnumVal = 'Si el tipus de camp és "enum" o "set", entra els valors fent servir el format: \'a\',\'b\',\'c\'...<br />Si mai necessites escriure la barra invertida ("\") o la cometa simple ("\'") abans d\'aquests valors, escriu barres invertides (per exemple \'\\\\xyz\' o \'a\\\'b\').';
$strShow = 'Mostra';
$strShowAll = 'Mostra tot';
$strShowColor = 'Mostra color';
$strShowCols = 'Mostra columnes';
$strShowDatadictAs = 'Format del Diccionari de Dades';
$strShowGrid = 'Mostra graella';
$strShowPHPInfo = 'Mostra informació de PHP';
$strShowTableDimension = 'Mostra dimensió de les taules';
$strShowTables = 'Mostra taules';
$strShowThisQuery = ' Mostra aquesta consulta de nou ';
$strShowingRecords = 'Mostrant registres: ';
$strSingly = '(singly)';
$strSize = 'Mida';
$strSort = 'Classificació';
$strSpaceUsage = 'Utilització d\'espai';
$strSplitWordsWithSpace = 'Paraules separades per un espai (" ").';
$strStatement = 'Sentències';
$strStatus = 'Estat';
$strStrucCSV = 'dades CSV ';
$strStrucData = 'Estructura i dades';
$strStrucDrop = 'Afegir \'drop table\'';
$strStrucExcelCSV = 'CSV per dades de Ms Excel';
$strStrucOnly = 'Només l\'estructura';
$strStructPropose = 'Proposa una estructura de taula';
$strStructure = 'Estructura';
$strSubmit = 'Enviar';
$strSuccess = 'La vostra comanda SQL ha estat executada amb èxit';
$strSum = 'Suma';

$strTable = 'Taula';
$strTableComments = 'Comentaris de la taula';
$strTableEmpty = 'El nom de la taula és buit!';
$strTableHasBeenDropped = 'S\'ha esborrat la taula %s';
$strTableHasBeenEmptied = 'S\'ha buidat la taula %s';
$strTableHasBeenFlushed = 'S\'ha buidat el caché de la taula %s';
$strTableMaintenance = 'Manteniment de la taula';
$strTableOfContents = 'Taula de continguts';
$strTableStructure = 'Estructura de la taula';
$strTableType = 'Tipus de taula';
$strTables = '%s taula(es)';
$strTextAreaLength = ' A causa de la seva longitud,<br /> aquest camp pot no ser editable ';
$strTheContent = 'El contingut del fitxer especificat ha estat inserit.';
$strTheContents = 'El contingut del fitxer substituirà els continguts de les taules seleccionades a les files que contenen la mateixa clau única o primària';
$strTheTerminator = 'El separador de camps.';
$strThreadSuccessfullyKilled = 'Fil %s cancel.lat correctament.';
$strTime = 'Temps';
$strTotalUC = 'Total';
$strTotal = 'total';
$strTraffic = 'Tràfic';
$strType = 'Tipus';

$strUncheckAll = 'Deseleccionar tot';
$strUnique = 'Única';
$strUnselectAll = 'Deselecciona tot';
$strUpdatePrivMessage = 'Heu actualitzat els privilegis de %s.';
$strUpdateProfile = 'Actualitza perfil:';
$strUpdateProfileMessage = 'S\'ha actualitzat el perfil.';
$strUpdateQuery = 'Actualitza consulta';
$strUsage = 'Ús';
$strUseBackquotes = 'Usa "backquotes" amb taules i noms de camps';
$strUseTables = 'Usa Taules';
$strUser = 'Usuari';
$strUserEmpty = 'El nom d\'usuari és buit!';
$strUserName = 'Nom d\'usuari';
$strUsers = 'Usuaris';

$strValidateSQL = 'Validar l\'SQL';
$strValidatorError = 'No s\'ha pogut iniciar el validador SQL. Si us plau, comproveu que teniu instal·lats els mòduls de PHP necessaris tal i com s\'indica a la %sdocumentació%s.';
$strValue = 'Valor';
$strVar = 'Variable';
$strViewDump = 'Veure un esquema de la taula';
$strViewDumpDB = 'Veure l\'esquema de la base de dades';

$strWebServerUploadDirectory = 'Directori de pujada d\'arxius del servidor web';
$strWebServerUploadDirectoryError = 'No està disponible el directori indicat per pujar arxius';
$strWelcome = 'Benvingut a %s';
$strWithChecked = 'Amb marca:';
$strWrongUser = 'Usuari i/o clau erronis. Accés denegat.';

$strYes = 'Si';

$strZip = '"comprimit amb zip"';

// To translate
$strLaTeX = 'LaTeX';  //to translate

$strAdministration = 'Administration'; //to translate
$strFlushPrivilegesNote = 'Note: phpMyAdmin gets the users\' privileges directly from MySQL\'s privilege tables. The content of this tables may differ from the privileges the server uses if manual changes have made to it. In this case, you should %sreload the privileges%s before you continue.'; //to translate
$strGlobalPrivileges = 'Global privileges'; //to translate
$strGrantOption = 'Grant'; //to translate
$strPrivDescAllPrivileges = 'Includes all privileges except GRANT.'; //to translate
$strPrivDescAlter = 'Allows altering the structure of existing tables.'; //to translate
$strPrivDescCreateDb = 'Allows creating new databases and tables.'; //to translate
$strPrivDescCreateTbl = 'Allows creating new tables.'; //to translate
$strPrivDescCreateTmpTable = 'Allows creating temporary tables.'; //to translate
$strPrivDescDelete = 'Allows deleting data.'; //to translate
$strPrivDescDropDb = 'Allows dropping databases and tables.'; //to translate
$strPrivDescDropTbl = 'Allows dropping tables.'; //to translate
$strPrivDescExecute = 'Allows running stored procedures; Has no effect in this MySQL version.'; //to translate
$strPrivDescFile = 'Allows importing data from and exporting data into files.'; //to translate
$strPrivDescGrant = 'Allows adding users and privileges without reloading the privilege tables.'; //to translate
$strPrivDescIndex = 'Allows creating and dropping indexes.'; //to translate
$strPrivDescInsert = 'Allows inserting and replacing data.'; //to translate
$strPrivDescLockTables = 'Allows locking tables for the current thread.'; //to translate
$strPrivDescMaxConnections = 'Limits the number of new connections the user may open per hour.';
$strPrivDescMaxQuestions = 'Limits the number of queries the user may send to the server per hour.';
$strPrivDescMaxUpdates = 'Limits the number of commands that change any table or database the user may execute per hour.';
$strPrivDescProcess3 = 'Allows killing processes of other users.'; //to translate
$strPrivDescProcess4 = 'Allows viewing the complete queries in the process list.'; //to translate
$strPrivDescReferences = 'Has no effect in this MySQL version.'; //to translate
$strPrivDescReplClient = 'Gives the right to the user to ask where the slaves / masters are.'; //to translate
$strPrivDescReplSlave = 'Needed for the replication slaves.'; //to translate
$strPrivDescReload = 'Allows reloading server settings and flushing the server\'s caches.'; //to translate
$strPrivDescSelect = 'Allows reading data.'; //to translate
$strPrivDescShowDb = 'Gives access to the complete list of databases.'; //to translate
$strPrivDescShutdown = 'Allows shutting down the server.'; //to translate
$strPrivDescSuper = 'Allows connectiong, even if maximum number of connections is reached; Required for most administrative operations like setting global variables or killing threads of other users.'; //to translate
$strPrivDescUpdate = 'Allows changing data.'; //to translate
$strPrivDescUsage = 'No privileges.'; //to translate
$strPrivilegesReloaded = 'The privileges were reloaded successfully.'; //to translate
$strResourceLimits = 'Resource limits'; //to translate
$strUserOverview = 'User overview'; //to translate
$strZeroRemovesTheLimit = 'Note: Setting these options to 0 (zero) removes the limit.'; //to translate

$strPasswordChanged = 'The Password for %s was changed successfully.'; // to translate

$strDeleteAndFlush = 'Delete the users and reload the privileges afterwards.'; //to translate
$strDeleteAndFlushDescr = 'This is the cleanest way, but reloading the privileges may take a while.'; //to translate
$strDeleting = 'Deleting %s'; //to translate
$strJustDelete = 'Just delete the users from the privilege tables.'; //to translate
$strJustDeleteDescr = 'The &quot;deleted&quot; users will still be able to access the server as usual until the privileges are reloaded.'; //to translate
$strReloadingThePrivileges = 'Reloading the privileges'; //to translate
$strRemoveSelectedUsers = 'Remove selected users'; //to translate
$strRevokeAndDelete = 'Revoke all active privileges from the users and delete them afterwards.'; //to translate
$strRevokeAndDeleteDescr = 'The users will still have the USAGE privilege until the privileges are reloaded.'; //to translate
$strUsersDeleted = 'The selected users have been deleted successfully.'; //to translate
$strOriginalInterface = 'original interface';  //to translate
?>
