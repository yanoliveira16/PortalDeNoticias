-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 01-Jul-2019 às 16:35
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yan_3h`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `cod_not` int(11) NOT NULL,
  `manchet_not` varchar(45) NOT NULL,
  `resumo_not` varchar(45) NOT NULL,
  `texto_not` longtext NOT NULL,
  `categoria_not` varchar(15) NOT NULL,
  `imagem_not` varchar(45) NOT NULL,
  `usuario_cod_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`cod_not`, `manchet_not`, `resumo_not`, `texto_not`, `categoria_not`, `imagem_not`, `usuario_cod_user`) VALUES
(1, 'Xiaomi', 'Sucesso! Xiaomi anuncia novo recorde de venda', 'Anunciados com boas especificações e preços, os novos Redmi K20 e K20 Pro se tornaram os queridinhos dos fãs da Xiaomi. Por isso, a empresa comemorou anteriormente as vendas de 200 mil unidades dos aparelhos no primeiro dia de mercado.\r\n\r\nAgora, a gigante chinesa anunciou que os dispositivos atingiram a marca de 1 milhão de unidades comercializadas. Isso indica que a Xiaomi precisou apenas de 4 a 5 eventos de vendas para que o número fosse alcançado.\r\n\r\nNo entanto, esse resultado poderia ser ainda melhor. Isso porque, como sabemos, a Xiaomi continua enfrentando um sério problema envolvendo a sua capacidade de produção. \r\n\r\nAproveitando o anúncio do recorde de vendas, o gerente da Redmi, Lu Weibing, usou as suas redes sociais para anunciar uma promoção na China. De acordo com o executivo, quem comprar o K20 levará para casa uma power bank de 10.000 mAh.\r\n\r\nJá os consumidores que optarem pelo K20 Pro ganharão um desconto para comprar um carregador de 27W por apenas 5 yuans (~R$ 3). Vale lembrar que esse resultado obtido pela Xiaomi se refere apenas ao mercado chinês.\r\n\r\nIsso porque a empresa não oficializou os K20 e K20 Pro na Índia. Além disso, apesar dos vazamentos, os Mi 9T ainda não ganharam previsão de lançamento em outros países. De toda forma, é bem provável que o sucesso dos aparelhos também se repita nos demais mercados.\r\n\r\nVocê pretende importar um Redmi K20? Conte para nós aqui nos comentários. ', 'hardware', 'imagens/xiaomi.jpg', 12),
(2, 'Mi CC9', 'Falta pouco! Mi CC9e surge no Geekbench e tem', 'Com lançamento oficial previsto para amanhã (2), os novos Mi CC9 e CC9e continuam tendo seus detalhes vazados na web. Isso porque nós já mostramos que um varejista acabou publicando os possíveis preços dos aparelhos no mercado chinês.\r\n\r\nAgora, enquanto a Xiaomi tenta se manter em silêncio sobre os vazamentos, o Mi CC9e foi testado na plataforma de benchmark Geekbench. Com isso, agora já sabemos que o aparelho tem 6 GB de RAM e roda o Android 9.0 Pie.\r\n\r\nOutro detalhe interessante é que a ficha deixa claro que o processador do aparelho tem oito núcleos e clock de 1,8 GHz. Assim, muitos apontam que estamos falando de um Snapdragon 710 ou até mesmo o Snapdragon 632. Confira: \r\n\r\n\r\n    Tela AMOLED de 6.08 polegadas, resolução FHD+\r\n    Processador Snapdragon 710 ou 632\r\n    6 GB ou 8 GB de RAM\r\n    64 GB ou 128 GB de armazenamento\r\n    Câmera traseira tripla:\r\n        Sensor principal de 48 MP (Sony IMX582)\r\n        Sensor secundário de 8 MP\r\n        Sensor terciário de 5 MP\r\n    Câmera frontal de 32 MP\r\n    Bateria de 3.500 mAh com carregamento rápido de 18W\r\n    Android 9.0 Pie\r\n\r\nAnsioso pelo lançamento dos Mi CC9 e Mi CC9e? Conte para nós a sua expectativa aqui nos comentários. ', 'hardware', 'imagens/cc9.jpg ', 10),
(3, 'Segurança da Dell', 'Software de segurança da Dell apresenta nova ', 'O Support Assist, software de segurança criado pela Dell para proteger os computadores da marca contra vulnerabilidades, teve uma falha de segurança encontrada nesta semana. O mesmo aconteceu há quase dois meses.\r\n\r\nDescoberta por pesquisadores do SafeBreach, a vulnerabilidade não apenas afeta máquinas da Dell desta vez, como também fabricantes de notebooks que usam versões renomeadas do mesmo pacote do Windows, que conta com um componente conhecido como PC-Doctor Toolbox. Entre empresas conhecidas por utilizarem este componente em pacotes de software estão a loja Staples, a marca de produtos para jogos Corsair e a empresa de rastreamento visual Tobii.\r\n\r\nComo o software da Dell possui acesso à máquina em nível de administrador, terceiros podem se aproveitar da vulnerabilidade para instalar um código malicioso. Os pesquisadores afirmam que, como o Suport Assist vem pré-instalado em grande parte dos dispositivos que executam Windows, se o problema não for corrigido, milhões de usuários da fabricante serão afetados.', 'software', 'imagens/dell.png', 12);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cod_user` int(11) NOT NULL,
  `nome_user` varchar(45) NOT NULL,
  `perfil_user` varchar(15) NOT NULL,
  `login_user` varchar(45) NOT NULL,
  `senha_user` varchar(45) NOT NULL,
  `status_user` varchar(15) NOT NULL DEFAULT 's',
  `imagem_user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`cod_user`, `nome_user`, `perfil_user`, `login_user`, `senha_user`, `status_user`, `imagem_user`) VALUES
(9, 'Gabriel', 'operador', 'Gabriel', '123', 'a', 'imagens/'),
(10, 'Carlos', 'jornalista', 'Carlos', '123', 'a', 'imagens/'),
(11, 'Yan', 'administrador', 'yanzin', '123', 'a', ''),
(12, 'Gabriel Rosa', 'jornalista', 'Gabriel', '123', 'a', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`cod_not`),
  ADD KEY `fk_noticia_usuario_idx` (`usuario_cod_user`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cod_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `cod_not` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `cod_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `noticia`
--
ALTER TABLE `noticia`
  ADD CONSTRAINT `fk_noticia_usuario` FOREIGN KEY (`usuario_cod_user`) REFERENCES `usuarios` (`cod_user`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
