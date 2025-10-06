# Exercício PHP: Sistema de Pontuação de Jogadores

## 📋 Descrição

Este exercício demonstra o uso de três conceitos fundamentais do PHP:
- **Variáveis variáveis** (`$$variavel`)
- **Estrutura de controle Switch**
- **Operadores de incremento/decremento** (`+=`, `-=`)

## 🎯 Objetivo

Criar um sistema simples de pontuação para jogadores, onde cada ação realizada adiciona ou remove pontos da pontuação total.

## 🎮 Como Funciona

O programa simula um jogo onde:

1. **Três jogadores** são definidos: Mario, Luigi e Peach
2. Um **jogador ativo** é selecionado dinamicamente usando variáveis variáveis
3. **Cinco ações** são executadas sequencialmente
4. Cada ação tem um **valor de pontos** específico:
   - `pulo`: +10 pontos
   - `moeda`: +5 pontos
   - `estrela`: +50 pontos
   - `dano`: -20 pontos
   - Ação desconhecida: 0 pontos

## 💡 Conceitos Aplicados

### Variáveis Variáveis
```php
$jogadorAtivo = 'jogador1';
$nomeJogador = $$jogadorAtivo; // Acessa dinamicamente $jogador1