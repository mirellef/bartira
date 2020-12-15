# SCPSA - Secretária de Cultura da Prefeitura de Santo Andre

Modelagem "Atividade" (não é evento);

titulo VARCHAR(250)
descricao LONGTEXT
responsavel INT
projeto INT
programa INT
periodo_inicio DATE
periodo_fim DATE
ano_base INT(4)



Empenho fracionado


Modelagem "Orçamento"

titulo VARCHAR(250)
projeto INT
ficha INT
dotacao VARCHAR
fonte VARCHAR
valor Double
data_liberacao DATE

Modelagem movimentação orçamentária
titulo VARCHAR(250)
tipo (INT) / Tipo
	+ contigenciamento
	+ descontigenciamento
	+ suplementado
data DATE
valor Double


contratação artística 
contratação de infraestrutura

Modelagem ATA


Hierarquia de Status

Evento 
	-> "Elaboração" dataEnvio = NULL
	-> "Enviado" dataEnvio = NOT NULL
	-> "Cultura Z" = dataEnvio = NOT NULL AND Liberado NOT NULL
	
Pedido de Contratação 
	-> "Elaboração" dataEnvio = NULL (não visível no sistema)
	-> "Em análise" dataEnvio = NOT NULL (vísivel no sistema)
	-> "Liberado"  dataEnvio = NOT NULL AND liberado = NOT NULL
	-> "Empenhado" dataEnvio = NOT NULL AND liberado NOT NULL AND empenhado = NOT NULL

