<center>
    <table border="0" rules="all" class="tm61 tm102 tm103 tm104 tm105">
        <tbody class="tm106">
            <tr height=200px valign="top" style="border-spacing=20px;">
                <td class="tm107 tm108 tm109">
                    <p class="tm66 tm82 tm99"><em><span class="tm101">
                            </span>
                            <span class="tm89">Date et signature du
                                Coordonnateur de fili&egrave;re</span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101">&#160;</span></em></p>
                </td>
                <td class="tm107 tm108 tm109">
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">Date et signature du Chef d&#8217;Entreprise</span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">(Cachet de l&#8217;Entreprise)</span></em></p>
                </td>
                <td class="tm107 tm108 tm109">
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">Date et signature du
                                stagiaire</span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">(Mention
                                manuscrite</span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">&laquo;&nbsp;lu et approuv&eacute;&nbsp;&raquo;)</span></em></p>

                </td>
                <td class="tm107 tm108 tm109">
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">Le Directeur de
                                l&#8217;INPT</span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">(ou son
                                Repr&eacute;sentant)</span></em></p>
                </td>
            </tr>
            <tr>
                <td class="tm107 tm108 tm109">
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">Nom et pr&eacute;nom
                            </span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">du
                                signataire</span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span
                                class="tm89"><strong>
                                {{ config('school.current.branches.'.$internship->person->filiere_text.'.cf_title') ?? '' }} 
                                {{ config('school.current.branches.'.$internship->person->filiere_text.'.cf_name')  ?? '. . . . . . . . . . . . . . . . . . .'}}
                            </strong></span></em>
                    </p>
                </td>
                <td class="tm107 tm108 tm109">
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">Nom et pr&eacute;nom
                            </span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">du
                                signataire</span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span
                                class="tm89">&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;.</span></em>
                    </p>
                </td>
                <td class="tm107 tm108 tm109">
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">Nom et pr&eacute;nom
                            </span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">du
                                signataire</span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span
                                class="tm89">&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;&#8230;.</span></em>
                    </p>
                </td>
                <td class="tm107 tm108 tm109">
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">Nom et pr&eacute;nom
                            </span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span class="tm89">du
                                signataire</span></em></p>
                    <p class="tm66 tm82 tm99"><em><span class="tm101"></span><span
                                class="tm89"><strong>
                                {{ config('school.current.signature.signing_title') }} 
                                {{ config('school.current.signature.signing_name') }}
                                </strong>
                            </span></em>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
</center>