﻿// ------------------------------------------------------------------------------
//  <auto-generated>
//    Generated by Xsd2Code. Version 3.4.0.32989
//    <NameSpace>NSALK.Models.GetGroups</NameSpace><Collection>List</Collection><codeType>CSharp</codeType><EnableDataBinding>False</EnableDataBinding><EnableLazyLoading>False</EnableLazyLoading><TrackingChangesEnable>False</TrackingChangesEnable><GenTrackingClasses>False</GenTrackingClasses><HidePrivateFieldInIDE>False</HidePrivateFieldInIDE><EnableSummaryComment>False</EnableSummaryComment><VirtualProp>False</VirtualProp><IncludeSerializeMethod>False</IncludeSerializeMethod><UseBaseClass>False</UseBaseClass><GenBaseClass>False</GenBaseClass><GenerateCloneMethod>False</GenerateCloneMethod><GenerateDataContracts>False</GenerateDataContracts><CodeBaseTag>Net40</CodeBaseTag><SerializeMethodName>Serialize</SerializeMethodName><DeserializeMethodName>Deserialize</DeserializeMethodName><SaveToFileMethodName>SaveToFile</SaveToFileMethodName><LoadFromFileMethodName>LoadFromFile</LoadFromFileMethodName><GenerateXMLAttributes>True</GenerateXMLAttributes><OrderXMLAttrib>False</OrderXMLAttrib><EnableEncoding>False</EnableEncoding><AutomaticProperties>False</AutomaticProperties><GenerateShouldSerialize>False</GenerateShouldSerialize><DisableDebug>False</DisableDebug><PropNameSpecified>Default</PropNameSpecified><Encoder>ASCII</Encoder><CustomUsings></CustomUsings><ExcludeIncludedTypes>False</ExcludeIncludedTypes><EnableInitializeFields>True</EnableInitializeFields>
//  </auto-generated>
// ------------------------------------------------------------------------------
namespace NSALK.Models.GetGroups
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
    [ModelName("NSALK.Models.GetGroups.SystemDataMessage")]
    public partial class SystemDataMessage
    {

        private List<SystemDataMessageGroups> itemsField;

        public SystemDataMessage()
        {
            this.itemsField = new List<SystemDataMessageGroups>();
        }

        [System.Xml.Serialization.XmlElementAttribute("Groups", Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public List<SystemDataMessageGroups> Items
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
    [ModelName("NSALK.Models.GetGroups.SystemDataMessageGroups")]
    public partial class SystemDataMessageGroups
    {

        private List<SystemDataMessageGroup> groupField;

        public SystemDataMessageGroups()
        {
            this.groupField = new List<SystemDataMessageGroup>();
        }



        [System.Xml.Serialization.XmlElementAttribute("Group", Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public List<SystemDataMessageGroup> Group
        {
            get
            {
                return this.groupField;
            }
            set
            {
                this.groupField = value;
            }
        }
    }

    [System.CodeDom.Compiler.GeneratedCodeAttribute("System.Xml", "4.0.30319.34234")]
    [System.SerializableAttribute()]
    [System.ComponentModel.DesignerCategoryAttribute("code")]
    [System.Xml.Serialization.XmlTypeAttribute(AnonymousType = true)]
    public partial class SystemDataMessageGroup
    {

        private int selectedidField;
        private int selectedgroupField;
        private int recidField;
        private string group_nameField;
        private string street_nameField;
        private string suburbField;
        private Nullable<int> area_coordinator_idField;
        private string area_coordinator_nameField;
        private string remarksField;
        private string setup_byField;
        private string last_updatedField;


        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public int selectedid { get { return this.selectedidField; } set { this.selectedidField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public int selectedgroupid { get { return this.selectedgroupField; } set { this.selectedgroupField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public int recid { get { return this.recidField; } set { this.recidField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string group_name { get { return this.group_nameField; } set { this.group_nameField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string street_name { get { return this.street_nameField; } set { this.street_nameField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string suburb { get { return this.suburbField; } set { this.suburbField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public Nullable<int> area_coordinator_id { get { return this.area_coordinator_idField; } set { this.area_coordinator_idField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string area_coordinator_name { get { return this.area_coordinator_nameField; } set { this.area_coordinator_nameField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string remarks { get { return this.remarksField; } set { this.remarksField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string setup_by { get { return this.setup_byField; } set { this.setup_byField = value; } }
        [System.Xml.Serialization.XmlElementAttribute(Form = System.Xml.Schema.XmlSchemaForm.Unqualified)]
        public string last_updated { get { return this.last_updatedField; } set { this.last_updatedField = value; } }
    }
}