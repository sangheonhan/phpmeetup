title: PHPDBG
author:
  name: Han Sangheon
  twitter: bookwormkr
  url: http://bookworm.pe.kr
output: basic.html
controls: true

--

# PHPDBG

--

## 소개

- PHP 5.6에 기본으로 포함된 인터랙티브 디버거
- XDebug와는 통신 방식이 다르다. (DBGP vs SAPI)
- PHP: 잘못된 디자인의 프랙탈
  - ~~실시간 디버깅 기능의 부재~~

--

## 주요 명령

- list
- info
- print
- frame
- back
- exec
- run
- step
- continue
- until
- finish
- leave
- break
- watch
- clear
- clean
- ev
- quit

--

## 축약

- lines    l
- func     f
- method   m
- class    c

--

## list

- list 10
- list func fib
- list method \ModernPUG\foobar::name
- list class foobar

--

## info

- info break
- info files
- info classes
- info funcs
- info error
- info vars
- info literal
- info memory

--

## print

- OpCode를 출력
- print
- print class foobar
- print method foobar::name
- print opline
- print exec
- print stack

--

## frame

- frame
- frame #n

--

## back

- 백트레이스를 출력
- back
- t

--

## exec

- 실행 컨텍스트를 설정
- exec fib.php

--

## run

- run
- r
- run hello

--

## step

- 현재 라인 실행
- step
- s

--

## continue

- 브레이크포인트나 와치포인트를 만날 때까지 실행
- continue
- c

--

## until

- 다음 라인을 실행 할때까지 브레이크포인트를 건너뛰어 실행
- until
- u

--

## finish

- finish
- F

--

## leave

- leave
- L

--

## break

- break fib
- break \ModernPUG\Foobar::name
- break fib.php:10
- break if $n > 6
- break del 3

--

## watch

- watch
- watch $n
- watch array $n
- watch recursive $n
- watch del $n

--

## clear

- clear
- C

--

## clean

- clean
- X

--

## ev

- ev $n
- ev $n = 10
- ev $n = rand()

--

## quit

- quit
- q

--

## Q&A

