﻿// ------------------------------------------------------------------------------
//  <auto-generated>
//    Generated by Xsd2Code. Version 3.4.0.32989
//    <NameSpace>NSALK.Models.UserProfile</NameSpace><Collection>List</Collection><codeType>CSharp</codeType><EnableDataBinding>False</EnableDataBinding><EnableLazyLoading>False</EnableLazyLoading><TrackingChangesEnable>False</TrackingChangesEnable><GenTrackingClasses>False</GenTrackingClasses><HidePrivateFieldInIDE>False</HidePrivateFieldInIDE><EnableSummaryComment>False</EnableSummaryComment><VirtualProp>False</VirtualProp><IncludeSerializeMethod>False</IncludeSerializeMethod><UseBaseClass>False</UseBaseClass><GenBaseClass>False</GenBaseClass><GenerateCloneMethod>False</GenerateCloneMethod><GenerateDataContracts>False</GenerateDataContracts><CodeBaseTag>Net40</CodeBaseTag><SerializeMethodName>Serialize</SerializeMethodName><DeserializeMethodName>Deserialize</DeserializeMethodName><SaveToFileMethodName>SaveToFile</SaveToFileMethodName><LoadFromFileMethodName>LoadFromFile</LoadFromFileMethodName><GenerateXMLAttributes>True</GenerateXMLAttributes><OrderXMLAttrib>False</OrderXMLAttrib><EnableEncoding>False</EnableEncoding><AutomaticProperties>False</AutomaticProperties><GenerateShouldSerialize>False</GenerateShouldSerialize><DisableDebug>False</DisableDebug><PropNameSpecified>Default</PropNameSpecified><Encoder>ASCII</Encoder><CustomUsings></CustomUsings><ExcludeIncludedTypes>False</ExcludeIncludedTypes><EnableInitializeFields>True</EnableInitializeFields>
//  </auto-generated>
// ------------------------------------------------------------------------------
namespace NSALK.Models.UserProfile
{
    using System;
    using System.Diagnostics;
    using System.Xml.Serialization;
    using System.Collections;
    using System.Xml.Schema;
    using System.ComponentModel;
    using System.Collections.Generic;
    using NSALK.Areas.HelpPage.ModelDescriptions;


    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Xml", "4.0.30319.34234")]
    [System.SerializableAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    [System.Xml.Serialization.XmlTypeAttribute(AnonymousType = true)]
    [System.Xml.Serialization.XmlRootAttribute(Namespace = "", IsNullable = false)]
    [ModelName("NSALK.Models.UserProfile.SystemDataResponse")]
    public partial class SystemDataResponse
    {

        private List<SystemDataResponseContacts> itemsField;

        public SystemDataResponse()
        {
            this.itemsField = new List<SystemDataResponseContacts>();
        }

        [System.Xml.Serialization.XmlElementAttribute("Contacts", Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public List<SystemDataResponseContacts> Items
        {
            get
            {
                return this.itemsField;
            }
            set
            {
                this.itemsField = value;
            }
        }
    }

    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Xml", "4.0.30319.34234")]
    [System.SerializableAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    [System.Xml.Serialization.XmlTypeAttribute(AnonymousType = true)]
    [ModelName("NSALK.Models.UserProfile.SystemDataResponseContacts")]
    public partial class SystemDataResponseContacts
    {

        private List<SystemDataResponseContact> contactField;

        public SystemDataResponseContacts()
        {
            this.contactField = new List<SystemDataResponseContact>();
        }

        

        [System.Xml.Serialization.XmlElementAttribute("Contact", Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public List<SystemDataResponseContact> Contact
        {
            get
            {
                return this.contactField;
            }
            set
            {
                this.contactField = value;
            }
        }
    }

    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Xml", "4.0.30319.34234")]
    [System.SerializableAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    [System.Xml.Serialization.XmlTypeAttribute(AnonymousType = true)]
    public partial class SystemDataResponseContact
    {

        private int recidField;
        private string firstnameField;
        private string middlenameField;
        private string lastnameField;
        private string genderField;
        private string physicaladdressunitnumberField;
        private string physicaladdressnumberField;
        private string physicaladdressnameField;
        private string physicaladdresssuburbField;
        private string physicaladdresspostcodeField;
        private string postaladdressnumberField;
        private string postaladdressboxlobbylocationField;
        private string postaladdresssuburbField;
        private string postaladdresspostcodeField;
        private string phonehomeField;
        private string phoneworkField;
        private string phonecellField;
        private string emailaddressdefaultField;
        private string emailaddressalternateField;
        private string usernameField;
        private string ipaddressField;
        private string remarksField;
        private string occupationField;
        private string otherremarksField;
        private string lastupdatedbyField;
        private string signupdateField;
        private string emergencyvolunteeringstatusField;
        private string mailingliststatusField;
        private string statusField;
        private string birthdateField;
        private string lastupdateddateField;
        private string passwordField;

        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Password { get { return this.passwordField; } set { this.passwordField = value; } }

        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public int Recid { get { return this.recidField; } set { this.recidField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Firstname { get { return this.firstnameField; } set { this.firstnameField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Middlename { get { return this.middlenameField; } set { this.middlenameField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Lastname { get { return this.lastnameField; } set { this.lastnameField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Gender { get { return this.genderField; } set { this.genderField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Physicaladdressunitnumber { get { return this.physicaladdressunitnumberField; } set { this.physicaladdressunitnumberField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Physicaladdressnumber { get { return this.physicaladdressnumberField; } set { this.physicaladdressnumberField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Physicaladdressname { get { return this.physicaladdressnameField; } set { this.physicaladdressnameField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Physicaladdresssuburb { get { return this.physicaladdresssuburbField; } set { this.physicaladdresssuburbField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Physicaladdresspostcode { get { return this.physicaladdresspostcodeField; } set { this.physicaladdresspostcodeField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Postaladdressnumber { get { return this.postaladdressnumberField; } set { this.postaladdressnumberField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Postaladdressboxlobbylocation { get { return this.postaladdressboxlobbylocationField; } set { this.postaladdressboxlobbylocationField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Postaladdresssuburb { get { return this.postaladdresssuburbField; } set { this.postaladdresssuburbField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Postaladdresspostcode { get { return this.postaladdresspostcodeField; } set { this.postaladdresspostcodeField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Phonehome { get { return this.phonehomeField; } set { this.phonehomeField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Phonework { get { return this.phoneworkField; } set { this.phoneworkField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Phonecell { get { return this.phonecellField; } set { this.phonecellField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Emailaddressdefault { get { return this.emailaddressdefaultField; } set { this.emailaddressdefaultField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Emailaddressalternate { get { return this.emailaddressalternateField; } set { this.emailaddressalternateField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Username { get { return this.usernameField; } set { this.usernameField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Ipaddress { get { return this.ipaddressField; } set { this.ipaddressField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Remarks { get { return this.remarksField; } set { this.remarksField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Occupation { get { return this.occupationField; } set { this.occupationField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Otherremarks { get { return this.otherremarksField; } set { this.otherremarksField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Lastupdatedby { get { return this.lastupdatedbyField; } set { this.lastupdatedbyField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Signupdate { get { return this.signupdateField; } set { this.signupdateField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Emergencyvolunteeringstatus { get { return this.emergencyvolunteeringstatusField; } set { this.emergencyvolunteeringstatusField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Mailingliststatus { get { return this.mailingliststatusField; } set { this.mailingliststatusField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Status { get { return this.statusField; } set { this.statusField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Birthdate { get { return this.birthdateField; } set { this.birthdateField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Lastupdateddate { get { return this.lastupdateddateField; } set { this.lastupdateddateField = value; } }


    }
}