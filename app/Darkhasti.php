<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darkhasti extends Model
{
    protected $table = 'darkhastiforms';

    protected $fillable = [
        'RegNo',
        'ReceivedDate',
        'EvaluationDate',
        'ShortlistDate',
        'InterviewDate',
        'RequestNumber',
        'Photo',
        'BastRequest',
        'Organization',
        'DirectorateOffice',
        'Name',
        'FatherName',
        'CurrentAddress',
        'Email',
        'BirthDate',
        'Phone',
        'Gender',
        'UniversityName',
        'StartUniversityFrom',
        'EndUniversityAt',
        'Faculty',
        'Department',
        'UniversityGrade',
        'SchoolName',
        'StartSchoolFrom',
        'EndSchoolAt',
        'OtherTraining',
        'Experience',
        'JobTitle',
        'Bast',
        'Address',
        'Date',
        'Responsiblities',
        'Crime',
        'CrimeDetails',
        'ReferenceName',
        'ReferenceAdds',
        'ReferencePhone',
        'secondReferenceName',
        'secondReferenceAdds',
        'secondReferencePhone',
        'RelativesName',
        'PastJobDate',
        'EndPastJobDate',
        'EmployerName',
        'PastJobRes',
        'PastJobDateFrom',
        'PastJobDateEnd',
        'SecEmployerName',
        'EmployerResponsibility',
        'Dari',
        'DariWrittingLevel',
        'DariReadingLevel',
        'DariSpeakingLevel',
        'Pashto',
        'PashtoWrittingLevel',
        'PashtoReadingLevel',
        'PashtoSpeakingLevel',
        'English',
        'EnglishWrittingLevel',
        'EnglishReadingLevel',
        'EnglishSpeakingLevel',
        'MoreLanguage',
        'ComputerSkills'
    ];
}
