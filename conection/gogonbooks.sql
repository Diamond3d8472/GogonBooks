-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Jun-2020 às 00:57
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gogonbooks`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `ID_Categoria` int(4) NOT NULL,
  `Nome_Categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`ID_Categoria`, `Nome_Categoria`) VALUES
(1, 'fantasia‎'),
(2, 'ficção científica‎ '),
(3, 'Administração'),
(4, 'Astronomia'),
(5, 'Brasil'),
(6, 'Drama');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livrosgo`
--

CREATE TABLE `livrosgo` (
  `ID_Livro` int(5) NOT NULL,
  `Nome_Livro` varchar(255) NOT NULL,
  `ISBN` int(20) NOT NULL,
  `Autor` varchar(255) NOT NULL,
  `Data_Pub` date NOT NULL,
  `ID_Categoria` smallint(6) DEFAULT NULL,
  `Descricao` longtext DEFAULT NULL,
  `Caminho_Foto` varchar(255) NOT NULL,
  `Caminho_Pdf` varchar(255) NOT NULL,
  `editora` varchar(255) NOT NULL,
  `Paginas` varchar(255) NOT NULL,
  `Preco_Livro` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livrosgo`
--

INSERT INTO `livrosgo` (`ID_Livro`, `Nome_Livro`, `ISBN`, `Autor`, `Data_Pub`, `ID_Categoria`, `Descricao`, `Caminho_Foto`, `Caminho_Pdf`, `editora`, `Paginas`, `Preco_Livro`) VALUES
(11, 'A Culpa É das Estrelas (Português)', 2147483647, 'John Green', '2012-07-09', 1, 'Livro - A culpa é das estrelas\r\nHazel é uma paciente terminal. Ainda que, por um milagre da medicina, seu tumor tenha encolhido bastante — o que lhe dá a promessa de viver mais alguns anos —, o último capítulo de sua história foi escrito no momento do diagnóstico. Mas em todo bom enredo há uma reviravolta, e a de Hazel se chama Augustus Waters, um garoto bonito que certo dia aparece no Grupo de Apoio a Crianças com Câncer. Juntos, os dois vão preencher o pequeno infinito das páginas em branco de suas vidas.Inspirador, corajoso, irreverente e brutal, A culpa é das estrelas é a obra mais ambiciosa e emocionante de John Green, sobre a alegria e a tragédia que é viver e amar.Best-seller da Veja', 'imagens/livros/9788580572261-15921658965ee686089a546imagem.jpg', 'pdf/9788580572261-15921658965ee6860899fcdConteudo.pdf', 'Intrínseca; Edição: 1ª', '288', 22.9),
(12, '180 anos da Proclamação da República Rio-Grandense', 2147483647, 'Carla Renata', '2017-05-03', 5, 'A ideia deste livro surgiu a partir do convite realizado pelo presidente do Instituto Histórico e Geográfico do Rio Grande do Sul, dr. Miguel Frederico do Espírito Santo, para organizarmos um evento, em parceria com a Assembleia Legislativa do Estado, que abordasse as ideias por trás da República Rio-grandense, por ocasião do 180º aniversário de sua proclamação em Piratini. Assim, organizamos o Simpósio As Ideias de República em Debate, para o qual foram convidados historiadores especialistas neste campo de estudos, cujos textos apresentados estão reunidos neste livro. ', 'imagens/livros/9788562943089-15921670345ee68a7ae5f5bimagem.jpg', 'pdf/9788562943089-15921670345ee68a7ae5d4bConteudo.pdf', 'revistaihgrgs', '257', 60.5),
(13, 'Como Eu Era Antes de Você:', 2147483647, 'Jojo Moyes', '2013-04-09', 6, ' Aos 26 anos, Louisa Clark não tem muitas ambições. Ela mora com os pais, a irmã mãe solteira, o sobrinho pequeno e um avô que precisa de cuidados constantes desde que sofreu um derrame. Trabalha como garçonete num café, um emprego que não paga muito, mas ajuda nas despesas, e namora Patrick, um triatleta que não parece interessado nela. Não que ela se importe.\r\n\r\nQuando o café fecha as portas, Lou é obrigada a procurar outro emprego. Sem muitas qualificações, consegue trabalho como cuidadora de um tetraplégico. Will Traynor, de 35 anos, é inteligente, rico e mal-humorado. Preso a uma cadeira de rodas depois de um acidente de moto, o antes ativo e esportivo Will desconta toda a sua amargura em quem estiver por perto. Tudo parece pequeno e sem graça para ele, que sabe exatamente como dar um fim a esse sentimento. O que Will não sabe é que Lou está prestes a trazer cor a sua vida. E nenhum dos dois desconfia de que irá mudar para sempre a história um do outro. ', 'imagens/livros/8580573297-15921678765ee68dc44d392imagem.jpg', 'pdf/8580573297-15921678765ee68dc44d15cConteudo.pdf', 'Intrínseca', '320', 27.86),
(14, 'A História da Revolução Russa', 2147483647, 'Leon Trotsky', '2017-05-09', 5, 'Em 2017 celebra-se o primeiro centenário da Revolução Russa, que levou ao poder o bolchevismo e criou a União das Repúblicas Socialistas Soviéticas, um acontecimento que marcou profundamente o século XX e redefiniu o mapa ideológico das nações. Só este fato justificaria a publicação deste livro de Leon Trotsky, um dos protagonistas do evento que mudou a configuração política do Planeta. O fundamental desta obra é seu caráter histórico. Conhecer a revolução mais extremada que durou do início até o findar do século, é matéria que interessa a todos, independentemente de sua preferência ideológica. Os ideais da revolução russa tomaram metade da Europa e Ásia, expandiram-se pelo Caribe e África e influenciaram corações e mentes de vários governos populares ao redor do mundo.', 'imagens/livros/8570188145-15921687805ee6914cbca11imagem.jpg', 'pdf/8570188145-15921687805ee6914cbc7fbConteudo.pdf', 'Senado Federal', '510', 50.7),
(16, 'Varella History', 33132, 'Andrew&#39;s Tanebaum', '2005-11-07', 1, 'Dia em que Jorge Varella foi para a ilha do Governador e voltou flamenguista.\r\n\r\nUm belo livro', 'imagens/livros/33132-15922575085ee7ebe442d9dimagem.jpeg', 'pdf/33132-15922575085ee7ebe442a7eConteudo.pdf', 'União Flasco', '120', 114.99),
(17, 'O Cortiço', 2147483647, 'Aluísio Azevedo', '2012-06-15', 5, 'Publicado pela primeira vez em 1890, O cortiço descreve uma habitação coletiva no Rio de Janeiro do final do século XIX. Retrato implacável da sordidez e dos vícios humanos, o livro é uma tese determinista de Aluísio Azevedo, que acredita na suscetibilidade do homem diante de certas forças, como seu meio social, sua raça e sua época. Trata-se da obra-prima do Naturalismo brasileiro e, conforme a afirmação do crítico Antonio Candido, &#34;uma das conquistas definitivas do nosso romance.&#34;', 'imagens/livros/9788572323604-15922567465ee7e8eaa5ae9imagem.jpg', 'pdf/9788572323604-15922567465ee7e8eaa57ebConteudo.pdf', 'Câmara', '232', 18.4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuariosgo`
--

CREATE TABLE `usuariosgo` (
  `ID_User` int(5) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `senha` varchar(512) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `niveis_acesso_id` int(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuariosgo`
--

INSERT INTO `usuariosgo` (`ID_User`, `nome`, `username`, `senha`, `email`, `cpf`, `endereco`, `niveis_acesso_id`) VALUES
(1, 'walter', 'walter', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'diamond3d8472@gmail.com', '19127436713', 'r dos palmares', 1),
(5, 'João Victor', 'Fon25', '1ed5d4c3f9f6dd2f08e97b77211f67cde7ba708344df3765983cb7edce5de254c779d925d0f16bb5c63064e7a2f20d8ebea9ed8e939ef10bd22b58cfe8c17db2', 'joaovictorc2506@gmail.com', '12345678900', 'Rua Lourival Inácio', 0),
(6, 'ronaldo', 'ronaldo', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'ronaldo@gmail.com', '7767319', 'rua nosesque-89', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendasgo`
--

CREATE TABLE `vendasgo` (
  `ID_Venda` int(5) NOT NULL,
  `ID_Livro` int(5) NOT NULL,
  `ID_User` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendasgo`
--

INSERT INTO `vendasgo` (`ID_Venda`, `ID_Livro`, `ID_User`) VALUES
(1, 10, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`ID_Categoria`);

--
-- Índices para tabela `livrosgo`
--
ALTER TABLE `livrosgo`
  ADD PRIMARY KEY (`ID_Livro`);

--
-- Índices para tabela `usuariosgo`
--
ALTER TABLE `usuariosgo`
  ADD PRIMARY KEY (`ID_User`);

--
-- Índices para tabela `vendasgo`
--
ALTER TABLE `vendasgo`
  ADD PRIMARY KEY (`ID_Venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `ID_Categoria` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `livrosgo`
--
ALTER TABLE `livrosgo`
  MODIFY `ID_Livro` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `usuariosgo`
--
ALTER TABLE `usuariosgo`
  MODIFY `ID_User` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `vendasgo`
--
ALTER TABLE `vendasgo`
  MODIFY `ID_Venda` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
