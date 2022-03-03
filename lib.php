<?
/**
 * @name Latex Editor
 * @author Original by Tiago Floriano <tiagofloriano@protonmail.com> <http://tiagofloriano.github.io/>
 * @author Modified by nome <email ou URI> aaaa-mm-dd hh:mm  //para os próximos que modificarem
 * @license GPL 3
 * @version 1.0.0
 * 
 * 
 * 
 * SUMMARY
 * 
 * - class latex
 * ---- function code
 * 
 * - class tabs
 * ---- function tab
 * ---- function content
 * ---- function listtabs
 * ---- function listcontent
 */
 

/**
 * Class latex
 *
 * @package latex 
 * @author Tiago Floriano <tiagofloriano@protonmail.com>
 * @access public
 */
class latex {
    /** 
    * Gera o link formatado em HTML. Foi criada para reduzir o tempo de produção de novos links, mantendo um padrão de formatação. 
    * 
    * Exemplo de uso: $this->code("sqrt","Raiz");
    * 
    * @param string $code código latex sem a barra invertida. 
    * @param string $label texto que aparecerá no link 
    * @return string
    * @access public 
    */
    public function code($code,$label){
        echo "<a href=\"javascript:latex('$code');\" class=\"btn btn-outline-success btn-sm\">\( ";
        echo $label;
        echo " \)</a> 
        ";
    }
    
    /** 
    * Gera a aba formatada em HTML. Foi criada para reduzir o tempo de produção de novas abas, mantendo um padrão de formatação, sendo necessário apenas a inclusão da nova aba em um array na função listtabs().
    * 
    * Exemplo de uso: $this->tab("style","preview_style");
    * 
    * @param string $name nome usado nas tags para associar a aba com o conteúdo, que será visto na função content()
    * @param string $img imagem associando uma categoria de funções LaTeX
    * @param int|string $active informa se esta aba iniciará ativa ou não 
    * @return string
    * @access public 
    */
    public function tab($name,$img,$active=0){
        if($active == 1){ $act = "active"; }
        echo "<button class=\"nav-link $act\" id=\"nav-";
        echo $name;
        echo "-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-";
        echo $name;
        echo "\" type=\"button\" role=\"tab\" aria-controls=\"nav-";
        echo $name;
        echo "\" aria-selected=\"true\"><img src=\"img/";
        echo $img;
        echo ".png\"></button>";
    }
    
    
    /** 
    * Gera as listas de botões, formatados em HTML. A quantidade de barras invertidas se deve à interpretação realizada pelo JavaScript.
    * 
    * Exemplo de uso: $this->content("style",1); //lista os botões do grupo 'style'
    * 
    * @param string $name nome usado nas tags para associar a aba com o conteúdo. No código abaixo, usamos para separar os códigos LaTeX em grupos escolhidos arbitrariamente
    * @param int|string $active informa se este conteúdo iniciará ativo ou não 
    * @return string
    * @access public 
    */
    public function content($name,$active=0){
        if($active == 1){ $act = "active"; }
        echo "<div class=\"tab-pane fade show $act\" id=\"nav-";
        echo $name;
        echo"\" role=\"tabpanel\" aria-labelledby=\"nav-";
        echo $name;
        echo "-tab\"><br><div class=\"btn-group btn-group-justified\">
";
        
        if($name == "style"){
            //commands: https://docs.mathjax.org/en/latest/input/tex/macros/index.html
            $this->code("\\\\boldsymbol{}","\\boldsymbol{BoldGreek}");
            //$this->code("\\\\textup{}","\\textup{Upright}");
            $this->code("\\\\mathbf{}","\\mathbf{Bold}");
            $this->code("\\\\textbf{}","\\textbf{Bold}");
            $this->code("\\\\mathit{}","\\mathit{Italic}");
            $this->code("\\\\textit{}","\\textit{Italic}");
            $this->code("\\\\mathrm{}","\\mathrm{Roman}");
            $this->code("\\\\textrm{}","\\textrm{Roman}");
            $this->code("\\\\mathfrak{}","\\mathfrak{Fraktur}");
            //$this->code("\\\\textsl{}","\\textsl{Slanted}");
            $this->code("\\\\mathbb{}","\\mathbb{Math Blackboard}");
            $this->code("\\\\texttt{}","\\texttt{Type writer}");
            //$this->code("\\\\textsc{}","\\textsc{SMALL CAPS}");
            //$this->code("\\\\emph{}","\\emph{Emphasis}");
        }elseif($name == "accents"){
            $this->code("\\\\dot{}","\\dot{a}");
            $this->code("\\\\ddot{}","\\ddot{a}");
            $this->code("\\\\check{}","\\check{a}");
            $this->code("\\\\breve{}","\\breve{a}");
            $this->code("\\\\bar{}","\\bar{a}");
            $this->code("\\\\vec{}","\\vec{a}");
            $this->code("\\\\not{}","\\not{a}");
            $this->code("\\\\circ","\\circ");
        }elseif($name == "accents_ext"){
            $this->code("\\\\widetilde{}","\\widetilde{abc}");
            $this->code("\\\\widehat{}","\\widehat{abc}");
            $this->code("\\\\overleftarrow{}","\\overleftarrow{abc}");
            $this->code("\\\\overrightarrow{}","\\overrightarrow{abc}");
            $this->code("\\\\overline{}","\\overline{abc}");
            $this->code("\\\\underline{}","\\underline{abc}");
            $this->code("\\\\overbrace{}","\\overbrace{abc}");
            $this->code("\\\\underbrace{}","\\underbrace{abc}");
            $this->code("\\\\overset{}{}","\\overset{a}{abc}");
            $this->code("\\\\underset{}{}","\\underset{a}{abc}");
        }elseif($name == "arrows"){
            $this->code("x \\\\mapsto x^2 ","\\mapsto{a}");
            $this->code("n \\\\to ","n \\to ");
            $this->code("\\\\leftarrow","\\leftarrow");
            $this->code("\\\\rightarrow","\\rightarrow");
            $this->code("\\\\Leftarrow","\\Leftarrow");
            $this->code("\\\\Rightarrow","\\Rightarrow");
            $this->code("\\\\leftrightarrow","\\leftrightarrow");
            $this->code("\\\\Leftrightarrow","\\Leftrightarrow");
            $this->code("\\\\leftharpoonup","\\leftharpoonup");
            $this->code("\\\\rightharpoonup ","\\rightharpoonup ");
            $this->code("\\\\leftharpoondown ","\\leftharpoondown ");
            $this->code("\\\\rightharpoondown ","\\rightharpoondown ");
            $this->code("\\\\leftrightharpoons ","\\leftrightharpoons ");
            $this->code("\\\\rightleftharpoons ","\\rightleftharpoons ");
            $this->code("\\\\xleftarrow[]{}","\\xleftarrow[a]{b}");
            $this->code("\\\\xrightarrow[]{}","\\xrightarrow[a]{b}");
            $this->code("\\\\overset{}{\\\\leftarrow}","\\overset{a}{\\leftarrow}");
            $this->code("\\\\overset{}{\\\\rightarrow}","\\overset{a}{\\rightarrow}");
            $this->code("\\\\underset{}{\\\\leftarrow}","\\underset{a}{\\leftarrow}");
            $this->code("\\\\underset{}{\\\\leftarrow}","\\underset{a}{\\leftarrow}");
        }elseif($name == "binary"){
            $this->code("\\\\pm ","\\pm ");
            $this->code("\\\\cap ","\\cap ");
            $this->code("\\\\cup ","\\cup ");
            $this->code("\\\\cdot ","\\cdot ");
            $this->code("\\\\mp ","\\mp ");
            $this->code("\\\\Cap ","\\Cap ");
            $this->code("\\\\Cup ","\\Cup ");
            $this->code("\\\\uplus ","\\uplus ");
            $this->code("\\\\times ","\\times ");
            $this->code("\\\\sqcap ","\\sqcap ");
            $this->code("\\\\sqcup ","\\sqcup ");
            $this->code("\\\\bigsqcup ","\\bigsqcup ");
            $this->code("\\\\ast ","\\ast ");
            $this->code("\\\\wedge ","\\wedge ");
            $this->code("\\\\vee ","\\vee ");
            $this->code("\\\\bigtriangleup ","\\bigtriangleup ");
            $this->code("\\\\div ","\\div ");
            $this->code("\\\\barwedge ","\\barwedge ");
            $this->code("\\\\veebar ","\\veebar ");
            $this->code("\\\\bigtriangledown ","\\bigtriangledown ");
            $this->code("\\\\setminus ","\\setminus ");
            $this->code("\\\\triangleleft ","\\triangleleft ");
            $this->code("\\\\triangleright ","\\triangleright ");
            $this->code("\\\\star ","\\star ");
            $this->code("\\\\dotplus ","\\dotplus ");
            $this->code("\\\\lozenge ","\\lozenge ");
            $this->code("\\\\blacklozenge ","\\blacklozenge ");
            $this->code("\\\\bigstar ","\\bigstar ");
            $this->code("\\\\amalg ","\\amalg ");
            $this->code("\\\\bullet ","\\bullet ");
            $this->code("\\\\bigcirc ","\\bigcirc ");
            $this->code("\\\\dagger ","\\dagger ");
            $this->code("\\\\square ","\\square ");
            $this->code("\\\\blacksquare ","\\blacksquare ");
            $this->code("\\\\bigoplus ","\\bigoplus ");
            $this->code("\\\\ddagger ","\\ddagger ");
            $this->code("\\\\triangle ","\\triangle ");
            $this->code("\\\\blacktriangle ","\\blacktriangle ");
            $this->code("\\\\bigotimes ","\\bigotimes ");
            $this->code("\\\\wr ","\\wr ");
            $this->code("\\\\triangledown ","\\triangledown ");
            $this->code("\\\\blacktriangledown ","\\blacktriangledown ");
            $this->code("\\\\bigodot ","\\bigodot ");
            $this->code("\\\\diamond ","\\diamond ");
            $this->code("\\\\ominus ","\\ominus ");
            $this->code("\\\\oplus ","\\oplus ");
            $this->code("\\\\circledcirc ","\\circledcirc ");
            $this->code("\\\\oslash ","\\oslash ");
            $this->code("\\\\otimes ","\\otimes ");
            $this->code("\\\\circledast ","\\circledast ");
            $this->code("\\\\circleddash ","\\circleddash ");
            $this->code("\\\\odot ","\\odot ");
        }elseif($name == "brackets"){
            $this->code("\\\\left ( \\\\right ) ","\\left ( \\right ) ");
            $this->code("\\\\left \\\\|  \\\\right \\\\| ","\\left \\|  \\right \\| ");
            $this->code("\\\\left [  \\\\right ] ","\\left [  \\right ] ");
            $this->code("\\\\left \\\\langle  \\\\right \\\\rangle ","\\left \\langle  \\right \\rangle ");
            $this->code("\\\\left \\\\{  \\\\right \\\\} ","\\left \\{  \\right \\} ");
            $this->code("\\\\left \\\\lfloor \\\\right \\\\rfloor ","\\left \\lfloor  \\right \\rfloor ");
            $this->code("\\\\left |  \\\\right | ","\\left | \\right | ");
            $this->code("\\\\left \\\\lceil  \\\\right \\\\rceil ","\\left \\lceil  \\right \\rceil ");
            $this->code("\\\\left \\\\{  \\\\right. ","\\left \\{  \\right. ");
        }elseif($name == "greeklower"){
            $this->code("\\\\alpha ","\\alpha ");
            $this->code("\\\\beta ","\\beta ");
            $this->code("\\\\gamma ","\\gamma ");
            $this->code("\\\\delta ","\\delta ");
            $this->code("\\\\epsilon ","\\epsilon ");
            $this->code("\\\\varepsilon ","\\varepsilon ");
            $this->code("\\\\zeta ","\\zeta ");
            $this->code("\\\\eta ","\\eta ");
            $this->code("\\\\theta ","\\theta ");
            $this->code("\\\\vartheta ","\\vartheta ");
            $this->code("\\\\iota ","\\iota ");
            $this->code("\\\\kappa ","\\kappa ");
            $this->code("\\\\lambda ","\\lambda ");
            $this->code("\\\\mu ","\\mu ");
            $this->code("\\\\nu ","\\nu ");
            $this->code("\\\\xi ","\\xi ");
            $this->code("\\\\pi ","\\pi ");
            $this->code("\\\\varpi ","\\varpi ");
            $this->code("\\\\rho ","\\rho ");
            $this->code("\\\\varrho ","\\varrho ");
            $this->code("\\\\sigma ","\\sigma ");
            $this->code("\\\\varsigma ","\\varsigma ");
            $this->code("\\\\tau ","\\tau ");
            $this->code("\\\\upsilon ","\\upsilon ");
            $this->code("\\\\phi ","\\phi ");
            $this->code("\\\\varphi ","\\varphi ");
            $this->code("\\\\chi ","\\chi ");
            $this->code("\\\\psi ","\\psi ");
            $this->code("\\\\omega ","\\omega ");
        }elseif($name == "greekupper"){
            $this->code("\\\\Gamma ","\\Gamma ");
            $this->code("\\\\Delta ","\\Delta ");
            $this->code("\\\\Theta ","\\Theta ");
            $this->code("\\\\Lambda ","\\Lambda ");
            $this->code("\\\\Xi ","\\Xi ");
            $this->code("\\\\Pi ","\\Pi ");
            $this->code("\\\\Sigma ","\\Sigma ");
            $this->code("\\\\Upsilon ","\\Upsilon ");
            $this->code("\\\\Phi ","\\Phi ");
            $this->code("\\\\Psi ","\\Psi ");
            $this->code("\\\\Omega ","\\Omega ");
        }elseif($name == "matrix"){
            $this->code("\\\\begin{matrix} a & b \\\\\\\\ c & d \\\\end{matrix}","\\begin{matrix} a & b \\\\ c & d \\end{matrix}");
            $this->code("\\\\begin{bmatrix} a & b \\\\\\\\ c & d \\\\end{bmatrix}","\\begin{bmatrix} a & b \\\\ c & d \\end{bmatrix}");
            $this->code("\\\\binom{a}{b}","\\binom{a}{b}");
            $this->code("\\\\begin{pmatrix} a & b \\\\\\\\ c & d \\\\end{pmatrix}","\\begin{pmatrix} a & b \\\\ c & d \\end{pmatrix}");
            $this->code("\\\\begin{pmatrix} a & b \\\\\\\\ c & d \\\\end{pmatrix}","\\begin{pmatrix} a & b \\\\ c & d \\end{pmatrix}");
            $this->code("\\\\bigl(\\\\begin{smallmatrix} a & b \\\\\\\\ c & d \\\\end{smallmatrix}\\\\bigr)","\\bigl(\\begin{smallmatrix} a & b \\\\ c & d \\end{smallmatrix}\\bigr)");
            $this->code("\\\\begin{cases} a & \\\\text{ if } x=1 \\\\\\\\ b & \\\\text{ if } x=2 \\\\end{cases} ","\\begin{cases} a & \\text{ if } x=1 \\\\ b & \\text{ if } x=2 \\end{cases} ");
            $this->code("\\\\begin{vmatrix} a & b \\\\\\\\ c & d \\\\end{vmatrix}","\\begin{vmatrix} a & b \\\\ c & d \\end{vmatrix}");
            $this->code("\\\\begin{Bmatrix} a & b \\\\\\\\ c & d \\\\end{Bmatrix}","\\begin{Bmatrix} a & b \\\\ c & d \\end{Bmatrix}");
            $this->code("\\\\begin{align*} a & b \\\\\\\\ c & d \\\\end{align*}","\\begin{align*} a & b \\\\ c & d \\end{align*}");
            $this->code("\\\\begin{Vmatrix} a & b \\\\\\\\ c & d \\\\end{Vmatrix}","\\begin{Vmatrix} a & b \\\\ c & d \\end{Vmatrix}");
            $this->code("\\\\left\\\\{\\\\begin{matrix} a & b \\\\\\\\ c & d \\\\end{matrix}\\\\right.","\\left\{\\begin{matrix} a & b \\\\ c & d \\end{matrix}\\right.");
            $this->code("\\\\left.\\\\begin{matrix} a & b \\\\\\\\ c & d \\\\end{matrix}\\\\right|","\\left.\\begin{matrix} a & b \\\\ c & d \\end{matrix}\\right|");
        }elseif($name == "operators"){
            $this->code("x^{a}","x^{a}");
            $this->code("x_{a}","x_{a}");
            $this->code("x_{a}^{b}","x_{a}^{b}");
            $this->code("_{a}^{b}\\\\textrm{c}","_{a}^{b}\\textrm{c}");
            $this->code("\\\\frac{a}{b}","\\frac{a}{b}");
            $this->code("x\\\\tfrac{a}{b}","x\\tfrac{a}{b}");
            $this->code("\\\\frac{\\\\partial}{\\\\partial x}","\\frac{\\partial}{\\partial x}");
            $this->code("\\\\frac{\\\\partial^2 }{\\\\partial x^2}","\\frac{\\partial^2 }{\\partial x^2}");
            $this->code("\\\\frac{\\\\mathrm{d} }{\\\\mathrm{d} x}","\\frac{\\mathrm{d} }{\\mathrm{d} x}");
            $this->code("\\\\int","\\int");
            $this->code("\\\\int_{a}^{b}","\\int_{a}^{b}");
            $this->code("\\\\oint","\\oint");
            $this->code("\\\\oint_{a}^{b}","\\oint_{a}^{b}");
            $this->code("\\\\iint_{a}^{b}","\\iint_{a}^{b}");
            $this->code("\\\\bigcap ","\\bigcap ");
            $this->code("\\\\bigcap_{a}^{b}","\\bigcap_{a}^{b}");
            $this->code("\\\\bigcup ","\\bigcup ");
            $this->code("\\\\bigcup_{a}^{b}","\\bigcup_{a}^{b}");
            $this->code("\\\\lim_{x \\\\rightarrow 0 }","\\lim_{x \\rightarrow 0 }");
            $this->code("\\\\sum ","\\sum ");
            $this->code("\\\\sum_{a}^{b}","\\sum_{a}^{b}");
            $this->code("\\\\sqrt{a}","\\sqrt{a}");
            $this->code("\\\\sqrt[3]{a}","\\sqrt[3]{a}");
            $this->code("\\\\prod ","\\prod ");
            $this->code("\\\\prod_{a}^{b}","\\prod_{a}^{b}");
            $this->code("\\\\coprod","\\coprod");
            $this->code("\\\\coprod_{a}^{b}","\\coprod_{a}^{b}");
        }elseif($name == "relations"){
            $this->code("<","<");
            $this->code(">",">");
            $this->code("=","=");
            $this->code("\\\\leq ","\\leq ");
            $this->code("\\\\geq ","\\geq ");
            $this->code("\\\\doteq ","\\doteq ");
            $this->code("\\\\leqslant ","\\leqslant ");
            $this->code("\\\\geqslant ","\\geqslant ");
            $this->code("\\\\equiv ","\\equiv ");
            $this->code("\\\\nless ","\\nless ");
            $this->code("\\\\ngtr ","\\ngtr ");
            $this->code("\\\\neq ","\\neq ");
            $this->code("\\\\nleqslant ","\\nleqslant ");
            $this->code("\\\\not ","\\not ");
            $this->code("\\\\equiv ","\\equiv ");
            $this->code("\\\\prec ","\\prec ");
            $this->code("\\\\succ ","\\succ ");
            $this->code(":= ",":=");
            $this->code("\\\\preceq ","\\preceq ");
            $this->code("\\\\succeq ","\\succeq ");
            $this->code("\\\\ll ","\\ll ");
            $this->code("\\\\gg ","\\gg ");
            $this->code("\\\\approx ","\\approx ");
            $this->code("\\\\vdash ","\\vdash ");
            $this->code("\\\\dashv ","\\dashv ");
            $this->code("\\\\simeq ","\\simeq ");
            $this->code("\\\\smile ","\\smile ");
            $this->code("\\\\frown ","\\frown ");
            $this->code("\\\\cong ","\\cong ");
            $this->code("\\\\models ","\\models ");
            $this->code("\\\\perp ","\\perp ");
            $this->code("\\\\asymp ","\\asymp ");
            $this->code("\\\\mid ","\\mid ");
            $this->code("\\\\parallel ","\\parallel ");
            $this->code("\\\\propto ","\\propto ");
            $this->code("\\\\bowtie ","\\bowtie ");
            $this->code("\\\\Join ","\\Join ");
            $this->code("\\\\asymp ","\\asymp ");
            $this->code("\\\\backslash ","\\backslash ");
            $this->code("\\\\bigsqcup ","\\bigsqcup ");
            $this->code("\\\\backslash ","\\backslash ");
            $this->code("\\\\bigstar ","\\bigstar ");
            $this->code("\\\\bigtriangleup ","\\bigtriangleup ");
            $this->code("\\\\bigtriangledown ","\\bigtriangledown ");
            $this->code("\\\\biguplus ","\\biguplus ");
            $this->code("\\\\bigvee ","\\bigvee ");
            $this->code("\\\\bigwedge ","\\bigwedge ");
            $this->code("\\\\boxdot ","\\boxdot ");
        }elseif($name == "spaces"){
            echo "<a href=\"javascript:latex('a\\\\,b');\" class=\"btn btn-outline-success btn-sm\"><img src='/rbf/scripts/latexeditor/img/spaces_01.png'></a> ";
            echo "<a href=\"javascript:latex('a\\\\:b');\" class=\"btn btn-outline-success btn-sm\"><img src='/rbf/scripts/latexeditor/img/spaces_01.png'></a> ";
            echo "<a href=\"javascript:latex('a\\\\;b');\" class=\"btn btn-outline-success btn-sm\"><img src='/rbf/scripts/latexeditor/img/spaces_01.png'></a> ";
            echo "<a href=\"javascript:latex('a\\\\!b');\" class=\"btn btn-outline-success btn-sm\"><img src='/rbf/scripts/latexeditor/img/spaces_01.png'></a> ";
        }elseif($name == "subsupset"){
            //\ \ \ \ \ \ \ \ \ \ \ \ \ \nsubseteq 
            $this->code("\\\\sqsubset ","\\sqsubset ");
            $this->code("\\\\sqsupset ","\\sqsupset ");
            $this->code("\\\\sqsubseteq ","\\sqsubseteq ");
            $this->code("\\\\sqsupseteq ","\\sqsupseteq ");
            $this->code("\\\\subset ","\\subset ");
            $this->code("\\\\supset ","\\supset "); 
            $this->code("\\\\subseteq ","\\subseteq ");
            $this->code("\\\\supseteq ","\\supseteq ");
            $this->code("\\\\nsubseteq ","\\nsubseteq ");
            $this->code("\\\\nsupseteq ","\\nsupseteq "); 
            $this->code("\\\\subseteqq ","\\subseteqq ");
            $this->code("\\\\supseteqq ","\\supseteqq ");
            $this->code("\\\\nsubseteqq ","\\nsubseteqq ");
            $this->code("\\\\nsupseteqq ","\\nsupseteqq ");
            $this->code("\\\\in ","\\in ");
            $this->code("\\\\ni ","\\ni ");
            $this->code("\\\\notin ","\\notin ");
        }elseif($name == "symbols"){
            $this->code("\\\\therefore ","\\therefore ");
            $this->code("\\\\because ","\\because ");
            $this->code("\\\\cdots ","\\cdots ");
            $this->code("\\\\ddots ","\\ddots ");
            $this->code("\\\\vdots ","\\vdots ");
            $this->code("\\\\notin ","\\notin ");
            $this->code("\\\\S ","\\S ");
            //$this->code("\\\\textparagraph ","\\textparagraph ");
            //$this->code("\\\\textcopyright ","\\textcopyright ");
            $this->code("\\\\partial ","\\partial ");
            $this->code("\\\\imath ","\\imath ");
            $this->code("\\\\jmath ","\\jmath ");
            $this->code("\\\\Re ","\\Re ");
            $this->code("\\\\Im ","\\Im ");
            $this->code("\\\\forall ","\\forall ");
            $this->code("\\\\notin ","\\notin ");
            $this->code("\\\\exists ","\\exists ");
            $this->code("\\\\top ","\\top ");
            $this->code("\\\\mathbb{P} ","\\mathbb{P} ");
            $this->code("\\\\mathbb{N} ","\\mathbb{N} ");
            $this->code("\\\\mathbb{Z} ","\\mathbb{Z} ");
            $this->code("\\\\mathbb{I} ","\\mathbb{I} ");
            $this->code("\\\\mathbb{Q} ","\\mathbb{Q} ");
            $this->code("\\\\mathbb{R} ","\\mathbb{R} ");
            $this->code("\\\\mathbb{C} ","\\mathbb{C} ");
            $this->code("\\\\angle ","\\angle ");
            $this->code("\\\\measuredangle ","\\measuredangle ");
            $this->code("\\\\sphericalangle ","\\sphericalangle ");
            $this->code("\\\\varnothing ","\\varnothing ");
            $this->code("\\\\infty ","\\infty ");
            $this->code("\\\\mho ","\\mho ");
            $this->code("\\\\wp ","\\wp ");
        }else{
            echo $name;
        }
        
        echo "</div></div>";
    }

    /** 
    * Gera as abas de grupos/categorias de códigos LaTeX do nosso script
    * 
    * @return string
    * @access public 
    */
    public function listtabs() {
        $categories = array("style","accents","accents_ext","arrows","binary","brackets","greeklower","greekupper","matrix","operators","relations","spaces","subsupset","symbols");
        $cont=0;
        foreach ($categories as $key){
            echo $this->tab($categories[$cont],$categories[$cont]."_01",$cont+1);
            $cont++;
        }
    }
    
    /** 
    * Gera os conteúdos dos grupos/categorias de códigos LaTeX do nosso script
    * 
    * @return string
    * @access public 
    */
    public function listcontent() {
        $categories = array("style","accents","accents_ext","arrows","binary","brackets","greeklower","greekupper","matrix","operators","relations","spaces","subsupset","symbols");
        $cont=0;
        foreach ($categories as $key){
            echo $this->content($categories[$cont],$cont+1);
            $cont++;
        }
    }
}