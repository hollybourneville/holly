﻿// ------------------------------------------------------------------------------
//  <auto-generated>
//    Generated by Xsd2Code. Version 3.4.0.32989
//    <NameSpace>NSALK.Models.GetAgencies</NameSpace><Collection>List</Collection><codeType>CSharp</codeType><EnableDataBinding>False</EnableDataBinding><EnableLazyLoading>False</EnableLazyLoading><TrackingChangesEnable>False</TrackingChangesEnable><GenTrackingClasses>False</GenTrackingClasses><HidePrivateFieldInIDE>False</HidePrivateFieldInIDE><EnableSummaryComment>False</EnableSummaryComment><VirtualProp>False</VirtualProp><IncludeSerializeMethod>False</IncludeSerializeMethod><UseBaseClass>False</UseBaseClass><GenBaseClass>False</GenBaseClass><GenerateCloneMethod>False</GenerateCloneMethod><GenerateDataContracts>False</GenerateDataContracts><CodeBaseTag>Net40</CodeBaseTag><SerializeMethodName>Serialize</SerializeMethodName><DeserializeMethodName>Deserialize</DeserializeMethodName><SaveToFileMethodName>SaveToFile</SaveToFileMethodName><LoadFromFileMethodName>LoadFromFile</LoadFromFileMethodName><GenerateXMLAttributes>True</GenerateXMLAttributes><OrderXMLAttrib>False</OrderXMLAttrib><EnableEncoding>False</EnableEncoding><AutomaticProperties>False</AutomaticProperties><GenerateShouldSerialize>False</GenerateShouldSerialize><DisableDebug>False</DisableDebug><PropNameSpecified>Default</PropNameSpecified><Encoder>ASCII</Encoder><CustomUsings></CustomUsings><ExcludeIncludedTypes>False</ExcludeIncludedTypes><EnableInitializeFields>True</EnableInitializeFields>
//  </auto-generated>
// ------------------------------------------------------------------------------
namespace NSALK.Models.GetAgencies
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
    [ModelName("NSALK.Models.GetAgencies.SystemDataMessage")]
    public partial class SystemDataMessage
    {

        private List<SystemDataMessageServices> itemsField;

        public SystemDataMessage()
        {
            this.itemsField = new List<SystemDataMessageServices>();
        }

        [System.Xml.Serialization.XmlElementAttribute("Services", Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public List<SystemDataMessageServices> Items
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
    [ModelName("NSALK.Models.GetAgencies.SystemDataMessageServices")]
    public partial class SystemDataMessageServices
    {

        private List<SystemDataMessageService> serviceField;

        public SystemDataMessageServices()
        {
            this.serviceField = new List<SystemDataMessageService>();
        }



        [System.Xml.Serialization.XmlElementAttribute("Service", Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public List<SystemDataMessageService> Service
        {
            get
            {
                return this.serviceField;
            }
            set
            {
                this.serviceField = value;
            }
        }
    }

    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Xml", "4.0.30319.34234")]
    [System.SerializableAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    [System.Xml.Serialization.XmlTypeAttribute(AnonymousType = true)]
    public partial class SystemDataMessageService
    {
        private int recidField;
        private string service_nameField;
        private string service_phone_1Field;
        private string service_phone_2Field;
        private string service_email_1Field;
        private string service_email_2Field;
        private string service_url_1Field;
        private string service_url_2Field;

        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public int Recid { get { return this.recidField; } set { this.recidField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Service_name { get { return this.service_nameField; } set { this.service_nameField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string Service_phone_1 { get { return this.service_phone_1Field; } set { this.service_phone_1Field = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string service_phone_2 { get { return this.service_phone_2Field; } set { this.service_phone_2Field = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string service_email_1 { get { return this.service_email_1Field; } set { this.service_email_1Field = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string service_email_2 { get { return this.service_email_2Field; } set { this.service_email_2Field = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string service_url_1 { get { return this.service_url_1Field; } set { this.service_url_1Field = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string service_url_2 { get { return this.service_url_2Field; } set { this.service_url_2Field = value; } }

    }
}