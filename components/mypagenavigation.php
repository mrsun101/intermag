<?php

class mypagenavigation {
    
    private static function insertNumPageToHTML($numpage,$textpage,$baselink,$activepage=FALSE)
    {
        $typeclass = $activepage ? " class=\"activetablepage\" " : " class=\"tablepage\" ";
        $resultLink = $activepage ? $textpage : "<a href=\"$baselink$numpage\" class=\"myRef\">$textpage</a>";
        $result = "<div $typeclass>$resultLink</div>" ; 
        return $result;
    }
    
    /*
     * $kolrows - количество записей по резульатату полного запроса
     * $perpage - количество записей на одной странице
     * $numpage - номер текущей страницы
     * $baselink  - ссылка на базовую часть адреса 
     */
    public static function getPage($kolrows,$perpage,$numpage,$baselink)
    {
        $result = "<div id=\"numpagesfortable\">";
        
        $kolpages = ceil($kolrows/$perpage);
        $prev = 3;
        $first = $numpage - $prev;
        if ($first<1) {$first = 1;}
        $last = $numpage + $prev;
        if ($last>$kolpages) {$last = $kolpages;}
        $y = 1;
        if ($first>1) 
        {
            $result.= self::insertNumPageToHTML($y,"1",$baselink);            
        }
        $y = $first - 1;
        if ($first>10)
        {
            $result.=self::insertNumPageToHTML($y,"...",$baselink);            
        } else {
            for($i=2;$i<$first;$i++){
                $result.=self::insertNumPageToHTML($i,"$i",$baselink);
            }            
        }
        for ($i=$first;$i<$last+1;$i++)
        {
            if ($i==$numpage) 
            {
                $result.=self::insertNumPageToHTML("","$i",$baselink,TRUE);
            } 
            else 
            {
                $result.= self::insertNumPageToHTML($i, "$i", $baselink);                
            }            
        }
        $y = $last + 1;
        if ($last<$kolpages&&$kolpages-$last>2) {
            $result.= self::insertNumPageToHTML($y, "...", $baselink);
        }
        if ($last<$kolpages){
            $result.= self::insertNumPageToHTML($kolpages, "$kolpages", $baselink);            
        }
        $result.="</div>";
        return $result;
    }
}
