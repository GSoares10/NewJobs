CREATE DATABASE "NewJobs";

DROP TABLE IF EXISTS "Conta";
DROP TABLE IF EXISTS "Empresa";
DROP TABLE IF EXISTS "Endereco";
DROP TABLE IF EXISTS "Post";

CREATE TABLE "Conta" (
	"codConta" serial,
	"nome" varchar(250) NOT NULL,
	"sexo" varchar(10) NOT NULL,
	"dataNascimento" date NOT NULL,
	"telefone" char(11) NOT NULL, 
	"tipo" varchar (12) NOT NULL,
	"email" varchar(200) NOT NULL,
	"senha" varchar(100) NOT NULL,
	"fotoCapa" varchar(150),
	"foto" varchar(150),
	"descricao" text,
	"curriculo" varchar(150),
	CONSTRAINT "checkSexo" CHECK ("sexo" = 'Feminino' OR "sexo" = 'Masculino'),
	CONSTRAINT "checkTipo" CHECK ("tipo" = 'Usuário' OR "tipo" = 'Empreendedor'),
	CONSTRAINT "ContaPK" PRIMARY KEY ("codConta")
);

CREATE TABLE "Empresa" (
	"cnpj" varchar(18) NOT NULL,
	"codConta" int NOT NULL,
	"nome" varchar(200) NOT NULL,
	"tipo" varchar(100) NOT NULL,
	CONSTRAINT "EmpresaPK" PRIMARY KEY ("cnpj"),
	CONSTRAINT "EmpresaContaFK" FOREIGN KEY ("codConta") 
		REFERENCES "Conta" ("codConta")
		ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE "Endereco" (
	"codEndereco" serial,
	"codEmpresa" varchar(18) NOT NULL,
	"rua" varchar(200) NOT NULL,
	"bairro" varchar(200) NOT NULL,
	"numero" char(10) NOT NULL,
	"cidade" varchar(150) NOT NULL,
	"pais" varchar(100) NOT NULL,
	CONSTRAINT "EnderecoPK" PRIMARY KEY ("codEndereco"),
	CONSTRAINT "EnderecoEmpresaFK" FOREIGN KEY ("codEmpresa") 
		REFERENCES "Empresa"
		ON UPDATE CASCADE ON DELETE CASCADE
);

CREATE TABLE "Post" (
	"codPost" serial,
	"codConta" int NOT NULL,
	"arquivo" varchar(150),
	"descricao" varchar(200),
	CONSTRAINT "PostPK" PRIMARY KEY ("codPost"),
	CONSTRAINT "PostContaFK" FOREIGN KEY ("codConta")
		REFERENCES "Conta" ("codConta")
		ON UPDATE CASCADE ON DELETE CASCADE
);

