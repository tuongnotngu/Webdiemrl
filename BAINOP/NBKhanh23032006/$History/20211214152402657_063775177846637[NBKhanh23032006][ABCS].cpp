#include <bits/stdc++.h>
#include <algorithm>
using namespace std;
int main()
{
   freopen("ABCS.int","r",stdin);
   freopen("ABCS.out","w",stdout);
    int a[7];
    for(int i=0;i<7;i++)
    cin>>a[i];
    sort (a,a+7);
    cout<<a[0]<<" "<<a[1]<<" "<<a[6]-a[0]-a[1];
}
