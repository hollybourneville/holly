//------------------------------------------------------------------------------
// <auto-generated>
//    This code was generated from a template.
//
//    Manual changes to this file may cause unexpected behavior in your application.
//    Manual changes to this file will be overwritten if the code is regenerated.
// </auto-generated>
//------------------------------------------------------------------------------

namespace NSALK
{
    using System;
    using System.Collections.Generic;
    
    public partial class nzaddress
    {
        public int streetid { get; set; }
        public string address_name { get; set; }
        public Nullable<int> address_type_id { get; set; }
        public string address_type { get; set; }
        public Nullable<int> address_range_from { get; set; }
        public Nullable<int> address_range_to { get; set; }
        public string suburb { get; set; }
        public string postcode { get; set; }
        public Nullable<int> oddeven { get; set; }
        public Nullable<int> region_id { get; set; }
        public Nullable<bool> auckland_city { get; set; }
    }
}
