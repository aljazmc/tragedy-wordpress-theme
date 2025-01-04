set exrc
set secure
set tabstop=2
set shiftwidth=2
set softtabstop=2
set expandtab
set autoindent
set smartindent

call plug#begin()

Plug 'dense-analysis/ale'

call plug#end()

let g:ale_php_phpcbf_executable = '/home/aljazmc/Projects/tragedy-wordpress-theme/ale-lint-in-docker/phpcbf'
let g:ale_php_phpcbf_use_global = 1

let g:ale_php_phpcs_executable = '/home/aljazmc/Projects/tragedy-wordpress-theme/ale-lint-in-docker/phpcs'
let g:ale_php_phpcs_use_global = 1
