--
-- Atualizações
--

-- INSERT INTO `devfuria_fulia`.`paginas`
-- (`ordem`, `url`, `urlLabel`, `titulo`, `descricao`, `metaTitle`, `metaDescr`, `secao`, `subSecao`, `nivel`, `status`, `dtCriacao`, `dtAtualizacao`, `autor`)
-- VALUES ('6', '/js/canvas/paths/', 'Paths (caminhos)', 'Paths (caminhos)', NULL, 'CANVAS - Paths (caminhos)', 'O básico sobre paths e subpaths', 'js', 'canvas', 'basico', 'done', '2014-04-23', '2014-04-23', NULL);
--
-- INSERT INTO `devfuria_fulia`.`paginas`
-- (`ordem`, `url`, `urlLabel`, `titulo`, `descricao`, `metaTitle`, `metaDescr`, `secao`, `subSecao`, `nivel`, `status`, `dtCriacao`, `dtAtualizacao`, `autor`)
-- VALUES ('5', '/js/canvas/lineCap-butt-round-square/', 'Limite das linhas', 'Limite das linhas <code>lineCap</code>', NULL, 'Canvas - Entendendo o método lineCap()', 'Método lineCap (butt, round, square)', 'js', 'canvas', 'basico', 'done', '2014-04-23', '2014-04-23', NULL);
--
-- UPDATE `devfuria_fulia`.`paginas`
-- SET `metaDescr` = 'Método lineJoin (miter, round, bevel)'
-- WHERE `paginas`.`url` = '/js/canvas/lineJoin-miter-round-bevel/';
--
-- UPDATE `devfuria_fulia`.`paginas`
-- SET `metaDescr` = 'Método lineJoin(''miter, round, bevel'')'
-- WHERE `paginas`.`url` = '/js/canvas/lineJoin-miter-round-bevel/';
--
-- UPDATE `devfuria_fulia`.`paginas`
-- SET `ordem` = '3'
-- WHERE `paginas`.`url` = '/js/canvas/line-width/';
--
-- UPDATE `devfuria_fulia`.`paginas`
-- SET `ordem` = '4'
-- WHERE `paginas`.`url` = '/js/canvas/lineJoin-miter-round-bevel/';
--
-- UPDATE `devfuria_fulia`.`paginas`
-- SET `metaDescr` = 'Aprenda o básico de arrays em PHP, veremos como criar, iterar(foreach e while) e funções internas.'
-- WHERE `paginas`.`url` = '/php/basico/arrays-vetores-matrizes/';
--
-- UPDATE `devfuria_fulia`.`paginas`
-- SET `metaDescr` = 'Veremos 4 conceitos básicos: endentação, nomeação, comentários e estilos. Boas práticas essenciais e que não podem faltar em seu repertório como programador.'
-- WHERE `paginas`.`url` = '/php/basico/boas-praticas/';
--
-- UPDATE `devfuria_fulia`.`paginas`
-- SET `metaDescr` = 'Exercícios de lógica de programação com respostas (sobre operadores de atribuição)'
-- WHERE `paginas`.`url` = '/logica-de-programacao/basico/exercicios-operadores-atribuicao/';
--
-- UPDATE `devfuria_fulia`.`paginas`
-- SET `metaDescr` = 'Introduziremos o conceito intuitivo de programação orientada a objetos, propriedades e métodos.'
-- WHERE `paginas`.`url` = '/js/basico/oop-primeiro-degrau/';
--
-- UPDATE paginas
-- SET subSecao  = "rtg"
-- WHERE subSecao = "receitas-tuto-guia"